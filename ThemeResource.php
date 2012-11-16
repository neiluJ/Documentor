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

use Documentor\Reflector, Documentor\Project;

/**
 * @category Library
 * @package  Documentor
 * @author   Julien Ballestracci <julien@nitronet.org>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     http://github.com/neiluj/Documentor
 */
class ThemeResource
{
    const TYPE_NAMESPACE = 'ns';
    const TYPE_CLASS    = 'class';
    const TYPE_FUNCTION = 'func';

    /**
     * @var string
     */
    protected $type;

    /**
     * @var Project
     */
    protected $project;

    /**
     * @var mixed
     */
    protected $resolver;

    /**
     * @var Reflector
     */
    protected $reflector;

    /**
     * Path to resource file
     *
     * @var string
     */
    protected $resource;

    /**
     * @var array
     */
    protected $options = array();

    /**
     *
     * @param string $resource Path to resource file
     *
     * @return void
     * @throws Exception
     */
    public function __construct($resource, array $options = array())
    {
        if (!is_file($resource)) {
            throw new Exception(sprintf("Invalid resource file '%s'", $resource));
        }

        $this->resource = $resource;
        $this->options  = $options;
    }

    /**
     *
     * @return string
     */
    public function execute()
    {
        ob_start();
        include $this->resource;
        $contents = ob_get_clean();
        return $contents;
    }

    /**
     *
     * @param string $type
     *
     * @return boolean
     */
    public function isType($type)
    {
        return $this->type === $type;
    }

    /**
     *
     * @param string $type
     *
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @param Project $project
     *
     * @return void
     */
    public function setProject(Project $project)
    {
        $this->project = $project;
    }

    public function getResolver()
    {
        return $this->resolver;
    }

    public function setResolver($resolver)
    {
        $this->resolver = $resolver;
    }

    /**
     *
     * @return boolean
     */
    public function hasReflector()
    {
        return isset($this->reflector);
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
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     *
     * @param string $resource
     *
     * @return void
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
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

    /**
     *
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    public function get($key, $default = null)
    {
        if (array_key_exists($key, $this->options)) {
            return $this->options[$key];
        }

        return $default;
    }

    /**
     *
     * @param string $key
     * @param mixed $value
     *
     * @return Object
     */
    public function set($key, $value)
    {
        $this->options[$key] = $value;

        return $this;
    }

    /**
     * Defines multiples values
     *
     * @param array $values Keys/Values to be set
     *
     * @return Object
     */
    public function setMulti(array $values)
    {
        foreach($values as $key => $value) {
            $this->set($key, $value);
        }

        return $this;
    }

    /**
     *
     * @param string $key
     *
     * @return boolean
     */
    public function has($key)
    {

        return array_key_exists($key, $this->options);
    }

    /**
     *
     * @param string $key
     *
     * @return Object
     */
    public function delete($key)
    {
        unset($this->options[$key]);

        return $this;
    }

    public function __set($name, $value)
    {
        return $this->set($name, $value);
    }

    public function __get($name)
    {
        return $this->get($name);
    }

    public function __isset($name)
    {
        return $this->has($name);
    }

    public function __unset($name)
    {
        return $this->delete($name);
    }
}