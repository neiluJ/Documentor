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
class ReflectionFunction extends AbstractReflector
{
    const ATTRIBUTES_REGEX  = "/\((.[^\)]+)\)/";

    protected $signatureString;

    protected $parameters;

    public function __construct($name = null)
    {
        $this->name = $name;
    }

    public function isInternal()
    {
        return false;
    }

    public function isUserDefined()
    {
        return true;
    }

    public function getSignatureString()
    {
        return $this->signatureString;
    }

    public function setSignatureString($signature)
    {
        $this->signatureString = $signature;
    }

    public function getParameters()
    {
        if (!isset($this->parameters)) {
            if (!$this->hasParameters()) {
                $this->parameters = array();
                return $this->parameters;
            }

            $list  = \explode(',', $this->_getParametersSignature());
            $params = array();

            foreach ($list as $string) {
                $db = $this->_getParameterDbFromString($string);

                $param = new ReflectionParameter(
                        $db['name'],
                        $db['optional'],
                        $db['type'],
                        $db['defaultValue'],
                        $db['reference']
                );

                $param->setPosition(count($params)+1);
                $param->setDeclaringFunction($this);

                $params[] = $param;
            }

            $this->parameters = $params;
        }

        return $this->parameters;
    }

    /**
     * Tells if this function has any attributes defined
     *
     * @return boolean
     */
    public function hasParameters()
    {
        return (bool)preg_match(self::ATTRIBUTES_REGEX, $this->signatureString);
    }

     /**
     * Return attributes signature
     *
     * @return boolean
     */
    protected function _getParametersSignature() {
        $attrMatch  = preg_match(self::ATTRIBUTES_REGEX, $this->signatureString, $matches);
        if($attrMatch) {
            return trim($matches[0], '()');
        }

        return null;
    }

    /**
     *
     * @param string $string
     * 
     * @return array
     */
    protected function _getParameterDbFromString($string) {
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
            $db['reference']   = true;
            $paramName = str_replace('&', '', $paramName);
        }

        if (\strpos($paramName, '$') !== 0) {
            list($type, $paramName) = explode('$', $paramName);
            $db['type'] = trim($type);
        }

        $db['name']         = ltrim(trim($paramName), '$');

        return $db;
    }

    /**
     *
     * @return integer
     */
    public function getNumberOfParameters()
    {
        return count($this->getParameters());
    }

    /**
     *
     * @return integer
     */
    public function getNumberOfRequiredParameters()
    {
        $required = 0;
        foreach ($this->getParameters() as $param) {
            if (!$param->isOptional()) {
                $required++;
            }
        }

        return $required;
    }
}