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

use Documentor\Parsers\PhpFileParser;
use Documentor\Reflection\ReflectionFunction,
    Documentor\Reflection\ReflectionClass,
    Documentor\Reflection\ReflectionMethod,
    Documentor\Reflection\ReflectionProperty,
    Documentor\Reflection\ReflectionConstant;

/**
 *
 * @category Library
 * @package  Documentor
 * @author   Julien Ballestracci <julien@nitronet.org>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     http://github.com/neiluj/Documentor
 */
class Interpret
{
    /**
     * @var PhpFileParser
     */
    protected $parser;

    /**
     *
     * @param string $filePath
     *
     * @return void
     */
    public function __construct($filePath)
    {
        $this->parser = new PhpFileParser();
        $this->parser->setFilePath($filePath);
    }

    /**
     * @return boolean
     */
    public function hasNamespace()
    {
        $results = $this->parser->getResults();
        if (!isset($results['namespace']) || !is_array($results['namespace'])) {
            return false;
        }

        return true;
    }

    /**
     *
     * @return string
     */
    public function getNamespace()
    {
        $results = $this->parser->getResults();
        if (!isset($results['namespace']) || !is_array($results['namespace']) || empty($results['namespace']['namespace'])) {
            return "\\";
        }

        return $results['namespace']['namespace'];
    }

    /**
     *
     * @param string $functionName
     *
     * @return boolean
     */
    public function hasFunction($functionName)
    {
        $results = $this->parser->getResults();
        if (!isset($results['functions']) || !is_array($results['functions'])) {
            return false;
        }

        foreach ($results['functions'] as $func) {
            if ($func['name'] == $functionName) {
                return true;
            }
        }

        return false;
    }

    /**
     *
     * @param string $functionName
     *
     * @return ReflectionFunction
     */
    public function getFunction($functionName)
    {
        if (!$this->hasFunction($functionName)) {
            throw new Exception(sprintf("Unknown function '%s'", $functionName));
        }

        $results    = $this->parser->getResults();
        $infos      = array();
        foreach ($results['functions'] as $func) {
            if ($func['name'] == $functionName) {
                $infos = $func;
            }
        }

        $func = new ReflectionFunction();
        $func->setStartLine($infos['startLine']);
        $func->setEndLine($infos['endLine']);
        $func->setFileName($this->parser->getFilePath());
        $func->setName($this->getItemFullName($infos['name']));
        $func->setSignatureString($infos['signature']);
        $func->setNamespaceName($this->getNamespace());

        if (isset($infos['comment']) && is_array($infos['comment'])) {
            $func->setDocComment(
                DocComment::factory(
                    $infos['comment']['text'],
                    $infos['comment']['startLine'],
                    $infos['comment']['endLine']
                )
            );
        }

        return $func;
    }

    /**
     *
     * @param string $functionName
     *
     * @return boolean
     */
    public function hasClass($className)
    {
        $results = $this->parser->getResults();

        $merge = array_merge($results['classes'], $results['interfaces']);
        return isset($merge);
    }

    /**
     *
     * @param string $className
     *
     * @return ReflectionClass
     */
    public function getClass($className)
    {
        if (!$this->hasClass($className)) {
            throw new Exception(sprintf("Unknown class '%s'", $className));
        }

        $results    = $this->parser->getResults();
        $interface  = false;

        if (isset($results['classes'][$className])) {
            $infos      = $results['classes'][$className];
        } else {
            $infos      = $results['interfaces'][$className];
            $interface  = true;
        }

        $class = new ReflectionClass();
        $class->setStartLine($infos['startLine']);
        $class->setEndLine($infos['endLine']);
        $class->setFileName($this->parser->getFilePath());
        $class->setName($this->getItemFullName($infos['name']));
        $class->setNamespaceName($this->getNamespace());
        $class->setInterface($interface);

        if (isset($infos['parent']) && !empty($infos['parent'])) {
            $class->setParentClass($infos['parent']);
        }

        $class->setImplements($infos['implements']);
        $class->setAbstract($infos['abstract']);

        if (isset($infos['comment']) && is_array($infos['comment'])) {
            $class->setDocComment(
                DocComment::factory(
                    $infos['comment']['text'],
                    $infos['comment']['startLine'],
                    $infos['comment']['endLine']
                )
            );
        }

        // methods
        if (isset($infos['methods']) && is_array($infos['methods'])) {
            foreach ($infos['methods'] as $methodInfos) {
                $method = new ReflectionMethod();
                $method->setAbstract($methodInfos['abstract']);
                $method->setFinal($methodInfos['final']);
                $method->setStatic($methodInfos['static']);
                $method->setStartLine($methodInfos['startLine']);
                $method->setEndLine($methodInfos['endLine']);
                $method->setFileName($this->parser->getFilePath());
                $method->setSignatureString($methodInfos['signature']);
                $method->setVisibility($methodInfos['visibility']);
                $method->setName($methodInfos['name']);

                 if (isset($methodInfos['comment']) && is_array($methodInfos['comment'])) {
                    $method->setDocComment(
                        DocComment::factory(
                            $methodInfos['comment']['text'],
                            $methodInfos['comment']['startLine'],
                            $methodInfos['comment']['endLine']
                        )
                    );
                }
                $method->setDeclaringClass($class);
                $method->setNamespaceName($this->getNamespace());

                $class->addMethod($method);
            }
        }

        // attr
        if (isset($infos['attributes']) && is_array($infos['attributes'])) {
            foreach ($infos['attributes'] as $attr) {
                $attribute = new ReflectionProperty($attr['name'], $attr['visibility'], $attr['value'],  $class);
                $attribute->setStatic($attr['static']);
                $attribute->setStartLine($attr['startLine']);
                $attribute->setEndLine($attr['endLine']);

                if (isset($attr['comment']) && is_array($attr['comment'])) {
                    $attribute->setDocComment(
                        DocComment::factory(
                            $attr['comment']['text'],
                            $attr['comment']['startLine'],
                            $attr['comment']['endLine']
                        )
                    );
                }

                $class->addProperty($attribute);
            }
        }

        // constants
        if (isset($infos['constants']) && is_array($infos['constants'])) {
            foreach ($infos['constants'] as $attr) {
                $const = new ReflectionConstant($attr['name'], $attr['value']);
                $const->setStartLine($attr['startLine']);
                $const->setEndLine($attr['endLine']);
                if (isset($attr['comment']) && is_array($attr['comment'])) {
                    $const->setDocComment(
                        DocComment::factory(
                            $attr['comment']['text'],
                            $attr['comment']['startLine'],
                            $attr['comment']['endLine']
                        )
                    );
                }

                $class->addConstant($const);
            }
        }

        return $class;
    }

    public function getClassesNames()
    {
        $results    = $this->parser->getResults();
        if (!isset($results['classes']) || !is_array($results['classes'])) {
            return array();
        }

        $final = array();
        foreach ($results['classes'] as $className => $infos) {
            $final[] = rtrim($this->getNamespace(), '\\') . '\\' . $className;
        }

        return $final;
    }

    public function getFunctionsNames()
    {
        $results    = $this->parser->getResults();
        if (!isset($results['functions']) || !is_array($results['functions'])) {
            return array();
        }

        $final = array();
        foreach ($results['functions'] as $infos) {
            $final[] = rtrim($this->getNamespace(), '\\') . '\\' . $infos['name'];
        }

        return $final;
    }

    /**
     *
     * @param string $name
     *
     * @return string
     */
    protected function getItemFullName($name)
    {
        return rtrim($this->getNamespace(), '\\') . '\\' . $name;
    }

    /**
     *
     * @return PhpFileParser
     */
    public function getParser()
    {
        return $this->parser;
    }

    /**
     *
     * @return array
     */
    public function getClasses()
    {
        $results = $this->parser->getResults();
        $merge = array_merge($results['classes'], $results['interfaces']);
        $final  = array();
        foreach ($merge as $className => $infos) {
            $final[$className] = $this->getClass($className);
        }

        return $final;
    }

    /**
     *
     * @return array
     */
    public function getFunctions()
    {
        $results    = $this->parser->getResults();
        $infos      = array();
        $final      = array();
        foreach ($results['functions'] as $func) {
            $final[$func['name']] = $this->getFunction($func['name']);
        }

        return $final;
    }
}