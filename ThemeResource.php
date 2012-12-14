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

use Documentor\Reflector,
    Documentor\Project;

/**
 * @category Library
 * @package  Documentor
 * @author   Julien Ballestracci <julien@nitronet.org>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     http://github.com/neiluj/Documentor
 */
class ThemeResource
{
    const TYPE_NAMESPACE   = 'ns';
    const TYPE_CLASS       = 'class';
    const TYPE_INDEX       = 'index';

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
    public function __construct(array $options = array())
    {
        $this->options  = $options;
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
     * @return ThemeResource
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
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
     * @return ThemeResource
     */
    public function setProject(Project $project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * @return Resolver
     */
    public function getResolver()
    {
        return $this->resolver;
    }

    /**
     * @param Resolver $resolver
     *
     * @return ThemeResource
     */
    public function setResolver(Resolver $resolver)
    {
        $this->resolver = $resolver;

        return $this;
    }

    /**
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
     * @param \Documentor\Reflector $reflector
     *
     * @return ThemeResource
     */
    public function setReflector(Reflector $reflector)
    {
        $this->reflector = $reflector;

        return $this;
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
     * @return ThemeResource
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
     * @return ThemeResource
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
     * @return ThemeResource
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

    /**
     *
     * @param string $componentName
     * @param string $type
     * @param string $originName
     *
     * @return string
     */
    public function url($componentName, $type, $originName = null)
    {
        if ($type == "namespace" && $componentName == "\\") {
            $componentName = '\_global';
        }

        $xpl        = explode('\\', ltrim($componentName, '\\'));
        $typeName   = null;
        $url        = array();

        if (null !== $originName) {
            $xpl2   = explode('\\', ltrim($originName, '\\'));
            $cnt    = count($xpl2);
            if (count($cnt)) {
                for ($x = 0; $x < $cnt; $x++) {
                    array_push($url, "..");
                }
            }
        } else {
            array_push($url, ".");
        }

        switch($type)
        {
            case 'namespace':
                $typeName = 'namespaces';
                break;

            case 'class':
                $typeName = 'classes';
                break;

            case 'assets':
                $typeName = 'assets';
                break;

            case 'index':
                $typeName = 'index';
                break;

            default:
                break;
        }

        if(empty($typeName)) {
            throw new \InvalidArgumentException(
                '$type parameter should be either "namespace" "assets" or "class"'
            );
        }

        if ($typeName !== "index") {
            array_push($url, $typeName);
        }
        foreach ($xpl as $compt) {
            array_push($url, $compt);
        }

        return implode('/', $url);
    }

    /**
     *
     * @param array $options
     *
     * @return ThemeResource
     */
    public static function factory(array $options = array())
    {
        return new self($options);
    }
}