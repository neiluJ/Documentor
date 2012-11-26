<?php
/**
 * Documentor
 *
 * Copyright (c) 2011-2012, Julien Ballestracci <julien@nitronet.org>.
 * All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * PHP Version 5.3
 *
 * @category  Library
 * @package   Documentor
 * @author    Julien Ballestracci <julien@nitronet.org>
 * @copyright 2012-2013 Julien Ballestracci <julien@nitronet.org>
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link      http://github.com/neiluj/Documentor
 */
namespace Documentor;

/**
 * Documentation project
 *
 * @category Exceptions
 * @package  Documentor
 * @author   Julien Ballestracci <julien@nitronet.org>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     http://github.com/neiluj/Documentor
 */
class Resolver
{
    /**
     * @var Project
     */
    protected $project;

    /**
     * @var Reflector
     */
    protected $reflector;

    /**
     *
     * @param \Documentor\Project $project
     * @param \Documentor\Reflector $reflector
     *
     * @return void
     */
    public function __construct(Project $project, Reflector $reflector = null)
    {
        $this->project      = $project;
        $this->reflector    = $reflector;
    }

    /**
     * Resolves a short-classname into its full name (namespace+classname)
     *
     * @param string $className
     *
     * @return string
     */
    public function resolveClassName($className)
    {
        $classes = $this->project->getClasses();
        if (isset($classes[$className])) {
            return $className;
        }

        $file = $this->reflector->getFilename();
        if (!isset($this->reflector) || empty($file) || !is_file($file)) {
            return $className;
        }

        $importsC = new Parsers\ImportsParser($file);
        $imports = $importsC->parse();

        foreach ($imports as $import) {
            if($import['alias'] == $className) {
                return $import['import'];
            }
        }

        if (strpos($className, '\\', 0) !== false) {
            return $className;
        }
        
        $nsC     = new Parsers\NamespaceParser($file);
        $ns      = $nsC->parse();

        return $ns['namespace'] . '\\' . $className;
    }

    /**
     *
     * @return array
     */
    public function heritedMethods()
    {
        $herited = array();
        if (!$this->reflector instanceof Reflection\ReflectionClass) {
            return $herited;
        }

        $parent = $this->reflector->getParentClass();
        if (empty($parent)) {
            return $herited;
        }

        $methods = array();
        $this->getParentMethods($parent, $methods);

        return $methods;
    }

    protected function getParentMethods($className, array &$methods = array())
    {
        $className = $this->resolveClassName($className);
        if (!$this->isIndexed($className)) {
            $methods[$className] = array(); /** @todo Internals **/
            return;
        }

        $classes    = $this->project->getClasses();
        $interpret  = new Interpret($classes[$className]);
        try {
            $reflector  = $interpret->getClass(trim($className));
        } catch(Exception $e) {
            $expl = explode('\\', $className);
            $reflector = $interpret->getClass(array_pop($expl));
        }

        $methods[$className] = $reflector->getMethods();

        $parent = $reflector->getParentClass();
        if (!empty($parent)) {
            $resolv = new self($this->project, $reflector);
            $full   = $resolv->resolveClassName($parent);
            $this->getParentMethods($full, $methods);
        }
    }

    /**
     *
     * @param string $className
     *
     * @return boolean
     */
    public function isIndexed($className)
    {
        $classes = $this->project->getClasses();

        return isset($classes[$className]);
    }

    /**
     *
     * @return Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     *
     * @param \Documentor\Project $project
     *
     * @return void
     */
    public function setProject(Project $project)
    {
        $this->project = $project;
    }

    /**
     *
     * @return Reflector
     */
    public function getReflector()
    {
        return $this->reflector;
    }

    /**
     *
     * @param \Documentor\Reflector $reflector
     *
     * @return void
     */
    public function setReflector(Reflector $reflector)
    {
        $this->reflector = $reflector;
    }
}