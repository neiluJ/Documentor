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
namespace Documentor\Reflection;

use Documentor\AbstractReflector;

/**
 * @category   Parsers
 * @package    Documentor
 * @subpackage Reflection
 * @author     Julien Ballestracci <julien@nitronet.org>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://github.com/neiluj/Documentor
 */
class ReflectionClass extends AbstractReflector
{
    protected $methods = array();

    protected $properties = array();

    protected $constants = array();

    protected $abstract = false;

    protected $final = false;

    protected $implements = array();

    protected $parentClass;
    
    protected $interface = false;

    /**
     *
     * @param \Documentor\Reflection\ReflectionMethod $method
     *
     * @return void
     */
    public function addMethod(ReflectionMethod $method)
    {
        $this->methods[$method->getName()] = $method;
    }

    /**
     *
     * @return array
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     *
     * @param string $methodName
     *
     * @return ReflectionClass
     * @throws \Documentor\Exception
     */
    public function getMethod($methodName)
    {
        if (!isset($this->methods[$methodName])) {
            throw new \Documentor\Exception(
                sprintf(
                    "Unknown method '%s' in class '%s'",
                    $methodName,
                    $this->name
                )
            );
        }

        return $this->methods[$methodName];
    }

    /**
     *
     * @param string $methodName
     *
     * @return boolean
     */
    public function hasMethod($methodName)
    {
        return isset($this->methods[$methodName]);
    }

    /**
     *
     * @param \Documentor\Reflection\ReflectionMethod $method
     *
     * @return void
     */
    public function addProperty(ReflectionProperty $prop)
    {
        $this->properties[$prop->getName()] = $prop;
    }

    /**
     *
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     *
     * @param string $methodName
     *
     * @return ReflectionProperty
     * @throws \Documentor\Exception
     */
    public function getProperty($propName)
    {
        if (!isset($this->properties[$propName])) {
            throw new \Documentor\Exception(
                sprintf(
                    "Unknown property '%s' in class '%s'",
                    $propName,
                    $this->name
                )
            );
        }

        return $this->properties[$propName];
    }

    /**
     *
     * @param string $propName
     *
     * @return boolean
     */
    public function hasProperty($propName)
    {
        return isset($this->properties[$propName]);
    }
    
    /**
     *
     * @param \Documentor\Reflection\ReflectionMethod $method
     *
     * @return void
     */
    public function addConstant(ReflectionConstant $constant)
    {
        $this->constants[$constant->getName()] = $constant;
    }

    /**
     *
     * @return array
     */
    public function getConstants()
    {
        return $this->constants;
    }

    /**
     *
     * @param string $methodName
     *
     * @return ReflectionConstant
     * @throws \Documentor\Exception
     */
    public function getConstant($constantName)
    {
        if (!isset($this->constants[$propName])) {
            throw new \Documentor\Exception(
                sprintf(
                    "Unknown constant '%s' in class '%s'",
                    $constantName,
                    $this->name
                )
            );
        }

        return $this->constants[$constantName];
    }

    /**
     *
     * @param string $propName
     *
     * @return boolean
     */
    public function hasConstant($constantName)
    {
        return isset($this->constants[$constantName]);
    }

    public function isAbstract()
    {
        return $this->abstract;
    }

    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
    }

    public function isFinal()
    {
        return $this->final;
    }

    public function setFinal($final)
    {
        $this->final = $final;
    }

    public function getInterfacesNames()
    {
        return $this->implements;
    }

    public function setImplements(array $implements)
    {
        $this->implements = $implements;
    }

    public function getParentClass()
    {
        return $this->parentClass;
    }

    public function setParentClass($parentClass)
    {
        $this->parentClass = $parentClass;
    }
    
    public function isInterface()
    {
        return $this->interface;
    }

    /**
     *
     * @param boolean $interface 
     * 
     * @return void
     */
    public function setInterface($interface)
    {
        $this->interface = (bool)$interface;
    }
    
    /**
     *
     * @return boolean 
     */
    public function isInstantiable()
    {
        if (!$this->isInterface() && !$this->isAbstract()) {
            return true;
        }
        
        return false;
    }
    
    /**
     *
     * @return array 
     */
    public function getStaticProperties()
    {
        $final = array();
        foreach ($this->getProperties() as $prop) {
            $final[] = $prop;
        }
        
        return $final;
    }
    
    /**
     * @return boolean
     */
    public function implementsInterface($interface)
    {
        /*
         * @todo check parents
         */
        return in_array($interface, $this->implements);
    }
    
    /**
     * @return boolean
     */
    public function isSubclassOf($parentClass)
    {
        /*
         * @todo check parents
         */
        return $this->parentClass == $parentClass;
    }
    
    /**
     *
     * @return boolean 
     */
    public function isCloneable()
    {
        if ($this->hasMethod('__clone')) {
            return $this->getMethod('__clone')->isPublic();
        }
        
        return (!$this->isInterface() && !$this->isAbstract());
    }
    
    /**
     * 
     * @return ReflectionMethod
     */
    public function getConstructor()
    {
        if ($this->hasMethod('__construct')) {
            return $this->getMethod('__construct');
        } elseif ($this->hasMethod($this->getShortName())) {
            return $this->getMethod($this->getShortName());
        }
        
        return null;
    }
    
    /**
     *
     * @param mixed $object 
     * 
     * @return boolean
     */
    public function isInstance($object)
    {
        if (!is_object($object)) {
            throw new \IllegalArgumentException();
        }
        
        if (!class_exists($this->name)) {
            return false;
        }
        
        return $object instanceof $this->name;
    }
    
    /**
     *
     * @param string $name
     * 
     * @return mixed 
     */
    public function getStaticPropertyValue($propName)
    {
        $prop = $this->getProperty($propName);
        if (!$prop->isStatic()) {
            return false;
        }
        
        return $prop->getDefaultValue();
    }
}