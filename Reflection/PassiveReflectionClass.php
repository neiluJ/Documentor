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
 * @category   Reflection
 * @package    Documentor
 * @subpackage Reflection
 * @author     Julien Ballestracci <julien@nitronet.org>
 * @copyright  2012-2013 Julien Ballestracci <julien@nitronet.org>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://github.com/neiluj/Documentor
 */
namespace Documentor\Reflection;

use Documentor\File;
use Documentor\DocComment;

/**
 * Class Reflection
 *
 * This class can be compared to ReflectionClass except it does not need to
 * include and instanciate the class to fetch informations.
 *
 * @category   Reflection
 * @package    Documentor 
 * @subpackage Reflection
 * @author     Julien Ballestracci <julien@nitronet.org>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://github.com/neiluj/Documentor
 */
class PassiveReflectionClass extends AbstractPassiveReflection {

    /**
     * Cache for reflected methods
     *
     * @var array
     */
    private $methods;

    /**
     * Cache for reflected attributes
     *
     * @var array
     */
    private $attributes;

    /**
     * Constructor
     *
     * Toolbox for reflected class informations
     *
     * @param array $db Data fetched from file
     * @param PassiveReflectorInterface $parent Parent reflected component
     * @return void
     */
    public function __construct(array $db,  $parent = null) {
        parent::__construct($db, $parent);

        if(isset($this->db['methods']))
            ksort($this->db['methods'], \SORT_STRING);
        if(isset($this->db['attributes']))
            ksort($this->db['attributes'], \SORT_STRING);
    }

    /**
     * Return shortened class name
     *
     * @return string
     */
    public function getShortName() {

        return $this->db['shortName'];
    }

    /**
     * Return this class name (including full namespace)
     *
     * @return string
     */
    public function getName() {

        return $this->db['className'];
    }

    /**
     * Tells if this class is abstract
     *
     * @return boolean
     */
    public function isAbstract() {

        return $this->db['abstract'];
    }

    /**
     * Tells if this class is final
     *
     * @return boolean
     */
    public function isFinal() {

        return $this->db['final'];
    }

    /**
     * Tells if this class is in a namespace or not (\ClassName)
     * 
     * @return boolean
     */
    public function inNamespace() {

        return !strpos($this->getName(), '\\') === 0;
    }

    /**
     * Tells the namespace for this class
     *
     * @return string
     */
    public function getNamespace() {

        return $this->getFile()->getNamespace();
    }

    /**
     * Tells if this class extends another class
     *
     * @return boolean
     */
    public function hasParentClass() {

        return ($this->db['parentClass'] != null);
    }

    /**
     * Returns the parent class name (if any)
     *
     * @return string
     */
    public function getParentClassName() {
        if(!$this->hasParentClass())
                return null;

        return $this->getFile()->getNamespacedName($this->db['parentClass']);
    }


    /**
     * Returns the list of all herited methods
     * 
     * @param \Documentor\Explorer\Index $index
     * @return array
     */
    public function getHeritedMethodsList(\Documentor\Explorer\Index $index) {
        if(!$this->hasParentClass())
                return array();

        $parentClassName    = $this->getParentClassName();
        $reflectors         = array();

        $reflector          = $index->getReflectedClass($parentClassName);
        if(!$reflector) {
            return array();
        }
        
        $final              = array();
        $reflectors[]       = $reflector;
        while($reflector->hasParentClass()) {
            $className      = $reflector->getParentClassName();
            $reflector      = $index->getReflectedClass($className);
            
            if(!$reflector)
                break;

            $reflectors[]   = $reflector;
        }

        $reflectors = \array_unique($reflectors);
        foreach($reflectors as $ref) {
            $methods                = $ref->getMethods();
            $final[$ref->getName()] = array();
            
            foreach($methods as $method) {
                $final[$ref->getName()][]        = $method->getName();
            }
        }

        return $final;
    }

    
    /**
     * Tells if this class implements any interfaces
     *
     * @return boolean
     */
    public function hasImplementedInterfaces() {

        return count($this->db['implements']) > 0;
    }

    /**
     * Tells if this class has any method defined
     *
     * @return boolean
     */
    public function hasMethods() {

        return count($this->db['methods']) > 0;
    }

    /**
     * Tells if this class has any constant defined
     *
     * @return boolean
     */
    public function hasConstants() {

        return count($this->db['constants']) > 0;
    }

    /**
     * Tells if this class has any attribute defined
     *
     * @return boolean
     */
    public function hasAttributes() {

        return count($this->db['attributes']) > 0;
    }

    /**
     * Returns a Reflected method from the file
     *
     * @param string $methodName
     * @return PassiveReflectionMethod
     */
    public function getMethod($methodName) {
        if(!isset($this->methods[$methodName])) {
            foreach($this->db['methods'] as $mName => $method) {
                if($mName === $methodName) {
                    $this->methods[$methodName] = new PassiveReflectionMethod ($method, $this);
                    break;
                }
            }

            if(!isset($this->methods[$methodName]))
                throw new \Exception(sprintf("Method %s does not exists in class %s", $methodName, $this->getName()));
        }

        return $this->methods[$methodName];
    }

    /**
     * Returns all methods from this file in an associative array
     *
     * Return format:
     *    0 => PassiveReflectionMethod(<method>),
     *    1 => PassiveReflectionMethod(<method>)
     *    ...
     *
     * @return array
     */
    public function getMethods() {
        $list = array();
        foreach($this->db['methods'] as $methodName => $details) {
            $list[] = $this->getMethod($methodName);
        }

        return $list;
    }


    /**
     * Returns a Reflected attribute from the file
     *
     * @param string $attrName
     * @return PassiveReflectionParameter
     */
    public function getAttribute($attrName) {
        if(!isset($this->attributes[$attrName])) {
            foreach((array)$this->db['attributes'] as $mName => $db) {
                if($mName === $attrName) {
                    $this->attributes[$attrName] = new PassiveReflectionParameter ($db, $this);
                    break;
                }
            }

            if(!isset($this->attributes[$attrName]))
                throw new \Exception(sprintf("Attribute %s does not exists in class %s", $attrName, $this->getName()));
        }

        return $this->attributes[$attrName];
    }

     /**
     * Returns all methods from this file in an associative array
     *
     * Return format:
     *    0 => PassiveReflectionProperty(<attribute>),
     *    ...
     *
     * @return array
     */
    public function getAttributes() {
        $list = array();
        foreach((array)$this->db['attributes'] as $attrName => $details) {
            $list[] = $this->getAttribute($attrName);
        }

        return $list;
    }

    /**
     *
     * @return array
     */
    public function getConstants() {
        if(!$this->countConstants())
                return array();
        
        $list = array();
        foreach($this->db['constants'] as $constant => $value) {
            $doc = new DocComment($value['docBlock']);
            
            $list[$constant]['value'] = $value['value'];
            $list[$constant]['doc']   = $doc->getComment();
        }

        return $list;
    }

    /**
     * Returns the number of methods defined in this class
     *
     * @return string
     */
    public function countMethods() {

        return (isset($this->db['methods']) ? count($this->db['methods']) : 0);
    }

    /**
     * Returns the number of attributes defined in this class
     *
     * @return string
     */
    public function countAttributes() {

        return (isset($this->db['attributes']) ? count($this->db['attributes']) : 0);
    }

    /**
     * Returns the number of interfaces implemented by this class
     *
     * @return string
     */
    public function countInterfacesImplemented() {

        return count($this->db['implements']);
    }

    /**
     * Returns the number of constants defined in this class
     *
     * @return string
     */
    public function countConstants() {

        return (isset($this->db['constants']) ? count($this->db['constants']) : 0);
    }

    /**
     * Builds a PassiveReflectionClass directly from file + className
     * 
     * @param string $className Class to reflect
     * @param string $file      Path to file
     * @return PassiveReflectionClass
     */
    public static function factory($className, $file) {
        $file = new File($file);

        return $file->getClass($className);
    }
}
