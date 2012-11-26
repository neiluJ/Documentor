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
class Project
{
    protected $name;

    protected $directories = array();

    protected $version;

    protected $namespaces;

    protected $classes;

    protected $functions;

    protected $indexed = false;

    protected $hashes;

    public function __construct($name, $version)
    {
        $this->name     = $name;
        $this->version  = $version;
    }

    /**
     *
     * @param \Documentor\Directory $directory
     *
     * @return \Documentor\Project
     */
    public function add(Directory $directory)
    {
        $this->directories[$directory->getPath()] = $directory;

        return $this;
    }

    /**
     *
     * @return void
     */
    public function index()
    {
        if ($this->indexed) {
            return;
        }

        $namespaces = array();
        $classes    = array();
        $functions  = array();

        foreach ($this->directories as $dir) {
            foreach ($dir->files() as $file) {
                $interpret = new Interpret($file);
                $namespaces[] = $interpret->getNamespace();

                foreach ($interpret->getClassesNames() as $className) {
                    $classes[$className] = $file;
                }

                foreach ($interpret->getFunctionsNames() as $func) {
                    $functions[$func] = $file;
                }

                $this->hashes[$file] = sha1(json_encode($interpret->getParser()->getResults()));
                unset($interpret);
            }
        }

        $this->namespaces = array_values(array_unique($namespaces));
        sort($this->namespaces, SORT_ASC);

        $this->functions  = $functions;
        ksort($this->functions, SORT_ASC);

        $this->classes    = $classes;
        ksort($this->classes, SORT_ASC);

        $this->indexed = true;
    }

    public function getFilesCount()
    {
        $this->index();

        return count($this->hashes);
    }

    public function getNamespaces()
    {
        $this->index();

        return $this->namespaces;
    }

    public function getClasses()
    {
        $this->index();

        return $this->classes;
    }

    public function getFunctions()
    {
        $this->index();

        return $this->functions;
    }

    public function getNamespaceClasses($ns)
    {
        $this->index();
        $classes    = array();
        $countRoot  = count(explode('\\', $ns));
        foreach ($this->classes as $className => $file) {
            $xpl = explode('\\', $className);
            if (\strpos($className, $ns) === 0 && count($xpl) == $countRoot+1) {
                $interpret = new Interpret($file);
                array_push($classes, $interpret->getClass(array_pop($xpl)));
            }
        }

        return $classes;
    }

    public function getNamespaceFunctions($ns)
    {
        $this->index();
        $funcs    = array();
        $countRoot  = count(explode('\\', $ns));
        foreach ($this->functions as $funcName => $file) {
            $xpl = explode('\\', $funcName);
            if (\strpos($funcName, $ns) === 0 && count($xpl) == $countRoot+1) {
                $interpret = new Interpret($file);
                array_push($funcs, $interpret->getFunction(array_pop($xpl)));
            }
        }

        return $funcs;
    }

    public function getNamespaceNamespaces($ns)
    {
        $this->index();
        $nses    = array();
        $countRoot  = count(explode('\\', $ns));
        foreach ($this->namespaces as $nsName) {
            $xpl = explode('\\', $nsName);
            if (\strpos($nsName, $ns) === 0 && count($xpl) == $countRoot+1) {
                array_push($nses, $nsName);
            }
        }

        return $nses;
    }
}