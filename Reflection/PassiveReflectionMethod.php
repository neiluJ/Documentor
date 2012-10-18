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

/**
 *
 * @category   Reflection
 * @package    Documentor 
 * @subpackage Reflection
 * @author     Julien Ballestracci <julien@nitronet.org>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://github.com/neiluj/Documentor
 */
class PassiveReflectionMethod extends AbstractPassiveReflection {

    const ATTRIBUTES_REGEX  = "/\((.[^\)+]*)\)/";

    /**
     * Parameters from method's signature
     * cache
     * 
     * @var array
     */
    protected $parameters;

    /**
     * Return this method name
     *
     * @return string
     */
    public function getName() {

        return $this->db['name'];
    }

    /**
     * Return this method's signature
     *
     * @return string
     */
    public function getSignature() {

        return $this->db['signature'];
    }


    /**
     * Tells if this method is abstract
     *
     * @return boolean
     */
    public function isAbstract() {

        return $this->db['abstract'];
    }

    /**
     * Tells if this method is final
     *
     * @return boolean
     */
    public function isFinal() {

        return $this->db['final'];
    }

    /**
     * Tells if this method is static
     *
     * @return boolean
     */
    public function isStatic() {

        return $this->db['static'];
    }

    /**
     * Tells if this method is public
     *
     * @return boolean
     */
    public function isPublic() {

        return $this->db['visibility'] == 'public';
    }

    /**
     * Tells if this method is private
     *
     * @return boolean
     */
    public function isPrivate() {

        return $this->db['visibility'] == 'private';
    }

    /**
     * Tells if this method is protected
     *
     * @return boolean
     */
    public function isProtected() {

        return $this->db['visibility'] == 'protected';
    }

    /**
     * Tells if this method has any attributes defined
     *
     * @return boolean
     */
    public function hasParameters() {
        $sig        = $this->db['signature'];
        $attrMatch  = preg_match(self::ATTRIBUTES_REGEX, $sig);

        return (bool)$attrMatch;
    }

    /**
     * Return attributes signature
     *
     * @return boolean
     */
    public function getParametersSignature() {
        $sig        = $this->db['signature'];
        $attrMatch  = preg_match(self::ATTRIBUTES_REGEX, $sig, $matches);
        if($attrMatch) {
            return trim($matches[0], '()');
        }

        return null;
    }

    /**
     * Load parameters from signature
     * 
     * @return array
     */
    public function getParameters() {
        $sign      = $this->getParametersSignature();
        
        if(empty($sign))
            return array();

        if(!isset($this->parameters)) {

            $list  = \explode(',', $sign);
            $params = array();
            foreach($list as $string) {
                $db = $this->_getParameterFromString($string);
                $params[] = new PassiveReflectionParameter($db, $this);
            }

            $this->parameters = $params;
        }

        return $this->parameters;
    }

    protected function _getParameterFromString($string) {
        $paramName          = trim($string);
        $db                 = array();
        $db['signature']    = $paramName;
        $db['optional']     = false;
        $db['type']         = null;
        $db['defaultValue'] = null;
        $db['reference']    = false;
        $optPos             = \strpos($string, '=');

        if ($optPos !== false) {
            $db['optional']             = true;
            list($paramName, $default)  = \explode('=', $paramName);
            $db['defaultValue']         = trim($default);
        }

        if (strpos($paramName, '&') !== false) {
            $db['refelrence']   = true;
            $paramName          = \str_replace('&', '', $paramName);
        }

        if (\strpos($paramName, '$') !== 0) {
            list($type, $paramName) = explode(' ', $paramName);
            $db['type']         = trim($type);
        }

        $db['name']         = trim($paramName);
        return $db;
    }

    /**
     * Return this method's visibility (public, private or protected)
     *
     * @return string
     */
    public function getVisibility() {

        return $this->db['visibility'];
    }

    /**
     * Builds a PassiveReflectionMethod directly from file + className + methodName
     *
     * @param string $methodName Method to reflect
     * @param string $className ClassName containing the desired method
     * @param string $file      Path to file
     * @return PassiveReflectionMethod
     */
    public static function factory($methodName, $className, $file) {
        $file = new File($file);

        return $file->getClass($className)->getMethod($methodName);
    }

    /**
     * Tells if this method is in a class
     *
     * @return boolean
     */
    public function isInClass() {

        return $this->parent instanceof PassiveReflectionClass;
    }

    /**
     * Tells if this method is in an interface
     *
     * @return boolean
     */
    public function isInInterface() {
        
        return $this->parent instanceof PassiveReflectionInterface;
    }
}
