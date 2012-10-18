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

use Documentor\Reflection\PassiveReflectionClass;
use Documentor\Reflection\AbstractPassiveReflection;
use Documentor\Reflection\PassiveReflectionInterface;

/**
 * File Reflection
 *
 * This class parse a PHP file and extract every useful information from it
 * like:
 *  - namespace
 *  - classes, functions, interfaces
 *  - methods, attributes, constants from every classes
 *  - used classes (use keyword) and parentClass and implemented interfaces
 *  - docBlocks for everything
 *
 * Usage is:
 * <code>
 * $file = new File('/path/to/app/file.php');
 * $file->hasFunctions();
 * ...
 * </code>
 *
 * @category Library
 * @package  Documentor
 * @author   Julien Ballestracci <julien@nitronet.org>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     http://github.com/neiluj/Documentor
 */
class File extends AbstractPassiveReflection {
    /**
     * Cache for reflected classes
     * 
     * @var array
     */
    private $classes;

    /**
     * Cache for reflected interfaces
     *
     * @var array
     */
    private $interfaces;

    /**
     * Cache for reflected functions
     *
     * @var array
     */
    private $functions;

    /**
     * Constructor
     *
     * Opens and parse a file
     *
     * @param string $file Path to file
     * @return void
     */
    public function __construct($file) {
        $file = \realpath($file);
        
        if (!is_file($file))
            throw new \Exception(sprintf('Unable to open file: %s', $file));

        $this->parse($file);
    }

    /**
     * Parse the file
     *
     * @return boolean 
     */
    public function parse($file) {
        $this->db = self::_parseFile($file);

        return true;
    }

    /**
     * Parses the file
     *
     * @todo simplify!! (use PHP_Token_Stream ?)
     * @static
     * @return array
     */
    public static function _parseFile($file) {
        $tokens = \token_get_all(\file_get_contents($file));

        $openClass = false;
        $openMethod = false;
        $openNs = false;
        $openUse = false;
        $openAs = false;
        $openFunction = false;
        $openConst = false;
        $openAttr = false;
        $openInterface = false;

        $classes = array();
        $namespace = null;
        $methods = array();
        $uses = array();
        $functions = array();
        $constants = array();
        $attributes = array();
        $interfaces = array();

        $final = false;
        $abstract = false;
        $static = false;
        $visibility = null;
        $doc = null;

        $inClass = 0;
        $inFunction = 0;
        $lastClass = null;

        foreach ($tokens as $num => $token) {
            if (!is_array($token)) {
                $tok = $token;
                $contents = $token;
                $line = null;
            } else {
                $tok = $token[0];
                $contents = $token[1];
                $line = $token[2];
            }

            if ($tok == \T_CLASS) {
                if (\is_string($openClass))
                    throw new \Exception("Parser error: class in class ($file:$line).");

                $openClass = "";
                continue;
            }
            elseif ($tok == \T_INTERFACE) {
                if (\is_string($openInterface))
                    throw new \Exception("Parser error: interface in interface ($file:$line).");

                $openInterface = "";
                continue;
            }

            elseif ($tok == \T_NAMESPACE) {
                if (\is_string($openNs))
                    throw new \Exception("Parser error: double namespace ($file:$line).");

                $openNs = "";
                continue;
            }

            elseif ($tok == \T_USE) {
                if (\is_string($openUse))
                    throw new \Exception("Parser error: double use ($file:$line).");

                $openUse = "";
                continue;
            }

            elseif ($tok == \T_AS && is_string($openUse)) {
                if (\is_string($openAs))
                    throw new \Exception("Parser error: double AS ($file:$line).");

                $openAs = "";
                continue;
            }

            elseif ($tok == \T_FUNCTION) {
                if (\is_string($openFunction))
                    continue; // support Closures

                    $openFunction = "";
                continue;
            }

            elseif ($tok == \T_ABSTRACT) {
                $abstract = true;
                continue;
            } elseif ($tok == \T_FINAL) {
                $final = true;
                continue;
            } elseif ($tok == \T_STATIC) {
                $static = true;
                continue;
            } elseif ($tok == \T_PUBLIC || $tok == \T_PRIVATE || $tok == \T_PROTECTED) {
                $visibility = ($tok == \T_PUBLIC ? 'public' : ($tok == \T_PRIVATE ? 'private' : 'protected'));
                continue;
            } elseif ($tok == \T_DOC_COMMENT) {
                $doc = $contents;

                if (!isset($return))
                    $return['docBlock'] = $doc;

                continue;
            }

            elseif ($tok == \T_CONST) {
                if (is_string($openConst))
                    throw new \Exception('Parse error: double CONST ($file:$line)');

                $openConst = "";
                continue;
            }

            elseif (($tok == \T_VAR || $tok == \T_VARIABLE) && $inClass > 0 && $inFunction == 0 && !is_string($openFunction)) {

                $openAttr = $contents;
                continue;
            }

            if (is_string($openClass) && ($contents != '{' && !empty($contents))) {
                $openClass .= $contents;
            } elseif (is_string($openClass) && ($contents == '{' || empty($contents) || $tok == \T_WHITESPACE)) {
                $openClass = trim($openClass);

                $className = "";
                $parentClass = null;
                $implements = array();
                $hasImplements = false;
                $xxx = \explode(' ', $openClass);

                foreach ($xxx as $x => $item) {
                    if ($x === 0) {
                        $className = $item;
                    } elseif ($item == 'extends') {
                        $parentClass = $xxx[$x + 1];
                    } elseif ($item == 'implements') {
                        $hasImplements = true;
                    }
                }

                if ($hasImplements) {
                    $impl = trim(substr($openClass, strpos($openClass, ' implements ') + 11));
                    if (strpos($impl, ',') !== false) {
                        $x = explode(',', $impl);
                        foreach ($x as $implemented) {
                            $implements[] = trim($implemented);
                        }
                    } else
                        $implements[] = $impl;
                }

                $tmp['className'] = $namespace . '\\' . $className;
                $tmp['shortName'] = $className;
                $tmp['abstract'] = $abstract;
                $tmp['final'] = $final;
                $tmp['docBlock'] = $doc;
                $tmp['parentClass'] = $parentClass;
                $tmp['implements'] = $implements;

                $openClass = false;
                $classes[$tmp['shortName']] = $tmp;

                $abstract = $final = false;
                $lastClass = $tmp['shortName'];
                $inClass++;
                unset($tmp);
                $doc = null;
            }

            if (is_string($openInterface) && ($contents != '{' && !empty($contents))) {
                $openInterface .= $contents;
            } elseif (is_string($openInterface) && ($contents == '{' || empty($contents) || $tok == \T_WHITESPACE)) {

                $openInterface = trim($openInterface);
                $tmp['className'] = $namespace . '\\' . $openInterface;
                $tmp['shortName'] = $openInterface;
                $tmp['docBlock'] = $doc;

                $openInterface = false;
                $interfaces[$tmp['shortName']] = $tmp;

                $lastClass = $lastInterface = $tmp['shortName'];
                $inClass++;
                unset($tmp);
                $doc = null;
            } elseif (is_string($openNs) && $contents != ';' && $contents != ',') {
                $openNs .= $contents;
            } elseif (is_string($openNs) && ($contents == ';' || $contents == ',')) {
                $namespace = trim($openNs);
                $openNs = false;
            } elseif (is_string($openUse) && !is_string($openAs) && ($contents != ';' && $contents != ',')) {
                $openUse .= $contents;
            } elseif (is_string($openUse) && is_string($openAs) && ($contents != ';' && $contents != ',')) {
                $openAs .= $contents;
            } elseif (is_string($openUse) && (is_string($openAs) || $openAs == false) && ($contents == ';' || $contents == ',')) {
                $uses[trim($openUse)] = (!is_string($openAs) ? null : trim($openAs));
                $openUse = ($contents == ',' ? "" : false);
                $openAs = false;
            } elseif (is_string($openFunction) && $contents != '{' && $contents != ';') {
                $openFunction .= $contents;
            } elseif (is_string($openFunction) && ($contents == '{' || $contents == ';')) {

                $name = \substr(trim($openFunction), 0, \strpos(trim($openFunction), '('));
                $name = $tmp['name'] = trim($name);

                $signature = "";
                if ($abstract)
                    $signature .= 'abstract ';

                if ($final)
                    $signature .= 'final ';

                if ($visibility != null)
                    $signature .= $visibility . ' ';

                if ($static)
                    $signature .= 'static ';

                $signature .= 'function ' . trim($openFunction);


                $tmp['signature'] = $signature;
                $tmp['abstract'] = $abstract;
                $tmp['final'] = $final;
                $tmp['visibility'] = $visibility;
                $tmp['static'] = $static;
                $tmp['docBlock'] = $doc;

                if ($inClass >= 1) {
                    if (!isset($lastInterface) || $lastClass != $lastInterface)
                        $classes[$lastClass]['methods'][$name] = $tmp;
                    else
                        $interfaces[$lastInterface]['methods'][$name] = $tmp;
                } else
                    $functions[$name] = $tmp;

                $openFunction = false;
                $inFunction++;

                $static = false;
                $visibility = null;
                $abstract = false;
                $final = false;
                $doc = null;
                unset($tmp);
            }

            elseif (is_string($openConst) && $contents != ';') {
                $openConst .= $contents;
            } elseif (is_string($openConst) && $contents == ';') {
                $constant = trim($openConst);

                $cname = trim(\substr($constant, 0, strpos($constant, '=')));
                $tmp['docBlock'] = $doc;
                $tmp['value'] = trim(\substr($constant, strpos($constant, '=') + 1, strlen($constant)));

                $classes[$lastClass]['constants'][$cname] = $tmp;
                $openConst = false;

                $doc = null;
                unset($tmp, $constant, $cname);
            } elseif (is_string($openAttr) && ($contents != ';' && $contents != ',')) {
                $openAttr .= $contents;
            } elseif (is_string($openAttr) && ($contents == ';' || $contents == ',')) {
                $variable = trim($openAttr);

                if (\strpos($variable, '=') !== false) {
                    $tmp['defaultValue'] = trim(\substr($variable, strpos($variable, '=') + 1, strlen($variable)));
                    $variable = trim(\substr($variable, 0, strpos($variable, '=')));
                } else {
                    $tmp['defaultValue'] = -1;
                }

                $tmp['docBlock']    = $doc;
                $tmp['visibility']  = $visibility;
                $tmp['static']      = $static;
                $tmp['name']        = $variable;
                $tmp['abstract']    = $abstract;
                $tmp['final']       = $final;

                $classes[$lastClass]['attributes'][$variable] = $tmp;

                if($contents == ';') {
                    $openAttr = false;

                    $static = false;
                    $visibility = null;
                    $abstract = false;
                    $final = false;
                    $doc = null;
                }

                $abstract = false;
                $final = false;
                unset($tmp, $variable);
            }

            if ($contents == '}') {
                if ($inFunction > 0)
                    $inFunction--;
                elseif ($inClass > 0)
                    $inClass--;
            }
            elseif ($contents == '{') {
                if ($inFunction > 0)
                    $inFunction++;
                elseif ($inClass > 0)
                    $inClass++;
            }
        }

        $return['file'] = $file;
        $return['namespace'] = $namespace;
        $return['uses'] = $uses;
        $return['classes'] = $classes;
        $return['interfaces'] = $interfaces;
        $return['functions'] = $functions;

        //var_dump($return);
        
        return $return;
    }

    /**
     * Tells if the file has classes defined in it.
     *
     * @return boolean
     */
    public function hasClasses() {

        return count($this->db['classes']) > 0;
    }

    /**
     * Tells if the file has $className defined in it.
     *
     * @return boolean
     */
    public function hasClass($className) {
        try {
            $class = $this->getClass($className);
            
            return true;
        } catch(\Exception $e) {
            return false;
        }
    }

    /**
     * Tells if the file has interfaces defined in it.
     *
     * @return boolean
     */
    public function hasInterfaces() {

        return count($this->db['interfaces']) > 0;
    }

    /**
     * Tells if the file has functions defined in it.
     *
     * @return boolean
     */
    public function hasFunctions() {

        return count($this->db['functions']) > 0;
    }

    /**
     * Tells if the file has a registered namespace
     *
     * @return boolean
     */
    public function hasNamespace() {

        return !empty($this->db['namespace']);
    }

    /**
     * Returns the actual file name
     *
     * @return string
     */
    public function getFileName() {

        return $this->db['file'];
    }

    /**
     * Returns the namespace used by the file (if any)
     * 
     * @return string
     */
    public function getNamespace() {

        return $this->db['namespace'];
    }

    /**
     * Returns the number of classes defined in this file
     *
     * @return string
     */
    public function countClasses() {

        return count($this->db['classes']);
    }

    /**
     * Returns the number of functions defined in this file
     *
     * @return string
     */
    public function countFunctions() {

        return count($this->db['functions']);
    }

    /**
     * Returns the number of interfaces defined in this file
     *
     * @return string
     */
    public function countInterfaces() {

        return count($this->db['interfaces']);
    }

    /**
     * Returns a Reflected class from the file
     * 
     * @param string $className
     * @return PassiveReflectionClass
     */
    public function getClass($className) {
        if(empty($className))
            throw new \Exception(sprintf("Class '%s' does not exists in %s", $className, $this->getFile()));
        
        if(!isset($this->classes[$className])) {
            foreach($this->db['classes'] as $class) {
                if(isset($class['shortName']) && $class['shortName']  === $className ||
                        $class['className'] === $className) {

                    $this->classes[$className] = new PassiveReflectionClass ($class, $this);
                    break;
                }
            }

            if(!isset($this->classes[$className]))
                throw new \Exception(sprintf("Class '%s' does not exists in %s", $className, $this->getFile()));
        }

        return $this->classes[$className];
    }

    /**
     *
     * @param string $methodOrFunction 
     * @return string
     */
    public function getNamespacedName($item) {
        $ns = $this->getNamespace();
        if(strpos($item, $ns) === 0)
                return $item;

        foreach($this->db['uses'] as $use => $as) {
            if($as == $item)
                return $use;

            elseif(strpos($use, $item) !== false)
                    return $use;
        }

        return (strpos($item, '\\') === 0 ? $item : $this->getNamespace() . '\\' . $item);
    }

    /**
     * Returns all classes from this file in an associative array
     *
     * Return format:
     *    0 => PassiveReflectionClass(<class>),
     *    1 => PassiveReflectionClass(<class>)
     *    ...
     * 
     * @return array
     */
    public function getClasses() {
        $list = array();
        foreach($this->db['classes'] as $className => $class) {
            $list[] = $this->getClass($className);
        }

        return $list;
    }

    /**
     * Returns a Reflected functions from the file
     *
     * @param string $name
     * @return PassiveReflectionFunction
     */
    public function getFunction($name) {
        if(!isset($this->functions[$name])) {
            foreach($this->db['functions'] as $funcName => $details) {
                if($funcName === $name) {
                    $this->functions[$name] = new PassiveReflectionFunction ($details, $this);
                    break;
                }
            }

            if(!isset($this->functions[$name]))
                throw new \Exception(sprintf("Function %s does not exists in %s", $name, $this->getName()));
        }

        return $this->functions[$name];
    }

    /**
     * Returns all functions from this file in an associative array
     *
     * Return format:
     *    0 => PassiveReflectionFunction(<class>),
     *    1 => PassiveReflectionFunction(<class>)
     *    ...
     *
     * @return array
     */
    public function getFunctions() {
        $list = array();
        foreach($this->db['functions'] as $funcName => $details) {
            $list[] = $this->getFunction($funcName);
        }

        return $list;
    }

    /**
     * Returns a Reflected interface from the file
     *
     * @param string $name
     * @return PassiveReflectionInterface
     */
    public function getInterface($name) {
        if(!isset($this->interfaces[$name])) {
            foreach($this->db['interfaces'] as $details) {
                if($details['shortName'] === $name ||
                        $details['className'] === $name) {
                    
                    $this->interfaces[$name] = new PassiveReflectionInterface ($details, $this);
                    break;
                }
            }

            if(!isset($this->interfaces[$name]))
                throw new \Exception(sprintf("Interface %s does not exists in %s", $name, $this->getName()));
        }

        return $this->interfaces[$name];
    }

    /**
     * Returns all interfaces from this file in an associative array
     *
     * Return format:
     *    0 => PassiveReflectionInterface(<interface>),
     *    1 => PassiveReflectionInterface(<interface>)
     *    ...
     *
     * @return array
     */
    public function getInterfaces() {
        $list = array();
        foreach($this->db['interfaces'] as $details) {
            $list[] = $this->getInterface($details['className']);
        }

        return $list;
    }

    /**
     * Return this file name
     *
     * @return string
     */
    public function getName() {
        
        return $this->db['file'];
    }

    public function hasFile() {

        return true;
    }

    /**
     * Return $this
     *
     * @return File
     */
    public function getFile() {

        return $this;
    }
}