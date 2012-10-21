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
namespace Documentor\Parsers;

use Documentor\AbstractParser;

/**
 * @category   Parsers
 * @package    Documentor 
 * @subpackage Parsers
 * @author     Julien Ballestracci <julien@nitronet.org>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://github.com/neiluj/Documentor
 */
class InterfaceParser extends AbstractParser
{
    /**
     * @return void
     */
    public function __construct($filePath = null)
    {
        parent::__construct($filePath);

        $this->addParsers(array(
            ':constants'    => new ConstantParser(),
            ':methods'      => new MethodParser(),
            ':attributes'   => new AttributeParser()
        ));
    }

    public function parse()
    {
        if (!isset($this->results)) {
            parent::parse();

            $tokens = $this->getTokens();
            $startLine = 0;
            $openClass = false;
            $abstract = false;
            $name = null;
            $implements = array();
            
            $inClass = 0;
            $inFunction = 0;

            foreach ($tokens as $num => $token) {
                if (!is_array($token)) {
                    $tok = $token;
                    $contents = $token;
                } else {
                    $tok = $token[0];
                    $contents = $token[1];
                    $line = $token[2];
                }

                if ($tok == \T_INTERFACE) {
                    if (\is_string($openClass)) {
                        throw new \Exception(sprintf(
                            "Parser error: double INTERFACE (%s:%s).", $this->filePath, $line
                        ));
                    }

                    $openClass = "";
                    $startLine = $line;
                    continue;
                } 
                
                if (is_string($openClass) && ($contents != '{' && !empty($contents))) {
                    $openClass .= $contents;
                } elseif (is_string($openClass) && ($contents == '{' || empty($contents) || $tok == \T_WHITESPACE)) {
                    $openClass = trim($openClass);

                    $className = "";
                    $parentClass = null;
                    $implements = array();
                    $xxx = \explode(' ', $openClass);

                    foreach ($xxx as $x => $item) {
                        if ($x === 0) {
                            $className = $item;
                        } elseif ($item == 'extends') {
                            $parentClass = $xxx[$x + 1];
                        } 
                    }

                    $name = $className;
                    $parentClass =  $parentClass;

                    $openClass = false;
                    $inClass++;
                }
                
                if ($contents == '}') {
                    if ($inClass == 1 && $openClass) {
                        $openClass = false;
                        $this->results[$name] = array(
                            'parent' => $parentClass,
                            'startLine' => $startLine,
                            'endLine' => $line + 1
                        );
                        
                        $this->appendData($name, 'constants');
                        $this->appendData($name, 'attributes');
                        $this->appendData($name, 'methods');
                        
                        $parentClass = null;
                        $name = null;
                    } else {
                        $inClass--;
                    }
                } elseif ($contents == '{') {
                    if ($inClass === false) {
                        $inClass = 1;
                    } else {
                        $inClass++;
                    }
                }
            }
            
            unset($this->results[':constants'], $this->results[':methods'],
                  $this->results[':attributes']);
        }

        return $this->results;
    }
    
    protected function appendData($className, $type)
    {
        if(!isset($this->results[$className])) {
            throw new \RuntimeException(sprintf(
               "Inexistant class %s", $className
            ));
        }
        
        $infos  = $this->results[$className];
        $start  = $infos['startLine'];
        $end    = $infos['endLine'];
        
        $remove = array();
        if(!isset($this->results[':'. $type]) || !is_array($this->results[':'. $type])) {
            return;
        }
        
        foreach ($this->results[':'. $type] as $key => $data)
        {
            if ($data['startLine'] >= $end || $data['endLine'] <= $start) {
                continue;
            }
            
            $this->results[$className][$type][$data['name']] = $data;
            $remove[] = $key;
        }
        
        foreach($remove as $key) {
            unset($this->results[':'. $type][$key]);
        }
    }
}