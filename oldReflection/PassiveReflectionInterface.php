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

/**
 * Interface Reflection
 *
 * This class can be compared to ReflectionClass except it is obviously for
 * interfaces
 *
 * @category   Reflection
 * @package    Documentor 
 * @subpackage Reflection
 * @author     Julien Ballestracci <julien@nitronet.org>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://github.com/neiluj/Documentor
 */
class PassiveReflectionInterface extends AbstractPassiveReflection {
    
    /**
     * Cache for reflected methods
     *
     * @var array
     */
    private $methods;

    /**
     * Constructor
     *
     * Toolbox for reflected interface informations
     *
     * @param array $db Data fetched from file
     * @param PassiveReflectorInterface $parent Parent reflected component
     * @return void
     */
    public function __construct(array $db,  $parent = null) {
        parent::__construct($db, $parent);

        ksort($this->db['methods'], \SORT_STRING);
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
     * Return this interface name (including full namespace)
     *
     * @return string
     */
    public function getName() {

        return $this->db['className'];
    }

    /**
     * Tells the namespace for this interface
     *
     * @return string
     */
    public function getNamespace() {

        return $this->getFile()->getNamespace();
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
        foreach($this->db['methods'] as $methodName => $arr) {
            $list[] = $this->getMethod($methodName);
        }

        return $list;
    }

    /**
     * Returns the number of methods defined in this class
     *
     * @return string
     */
    public function countMethods() {

        return count($this->db['methods']);
    }
    
    /**
     * Builds a PassiveReflectionClass directly from file + functionName
     * 
     * @param string $interfaceName Function to reflect
     * @param string $file      Path to file
     * @return PassiveReflectionInterface
     */
    public static function factory($interfaceName, $file) {
        $file = new File($file);

        return $file->getInterface($interfaceName);
    }

    /**
     * Tells if this interface is in a namespace or not (\ClassName)
     *
     * @return boolean
     */
    public function inNamespace() {

        return !strpos($this->getName(), '\\') === 0;
    }
}
