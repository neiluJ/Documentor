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
class AttributeParser extends AbstractParser
{
    public function parse()
    {
        if(!isset($this->results)) {
            $tokens     = $this->getTokens();
            $startLine  = 0;
            $openAttr  = false;
            $openFunction = false;
            $openClass  = false;
            $final      = false;
            $abstract   = false;
            $static     = false;
            $visibility = null;
            
            $inClass    = 0;
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

                if ($tok == \T_CLASS) {
                    $openClass = "";
                    continue;
                } elseif ($tok == \T_FUNCTION) {
                    if (\is_string($openFunction))
                        continue; // support Closures

                    $openFunction = "";
                    continue;
                } elseif ($tok == \T_ABSTRACT) {
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
                } elseif (($tok == \T_VAR || $tok == \T_VARIABLE) && $inClass > 0 && $inFunction == 0 && !is_string($openFunction)) {
                    $openAttr = $contents;
                    $startLine = $line;
                    continue;
                }
                
                if (is_string($openFunction) && ($contents == '{' || $contents == ';')) {
                    $openFunction = false;
                    $inFunction++;
                } elseif (is_string($openClass) && ($contents == '{' || empty($contents) || $tok == \T_WHITESPACE)) { 
                    $inClass++;
                    $openClass = false;
                } elseif (is_string($openAttr) && ($contents != ';' && $contents != ',')) {
                    $openAttr .= $contents;
                } elseif (is_string($openAttr)) {
                    $variable = trim($openAttr);

                    if (\strpos($variable, '=') !== false) {
                        $value      = trim(\substr($variable, strpos($variable, '=') + 1, strlen($variable)));
                        $variable   = trim(\substr($variable, 0, strpos($variable, '=')));
                    } else {
                        $value = false;
                    }

                    $this->results[] = array(
                       'name'       => ltrim($variable,'$'),
                       'value'      => $value,
                       'final'      => $final,
                       'static'     => $static,
                       'visibility' => $visibility,
                       'startLine'  => $startLine,
                       'endLine'    => $line
                    );
                    
                    if($contents == ';') {
                        $openAttr   = false;
                        $static     = false;
                        $visibility = null;
                        $final      = false;
                        unset($variable, $value);
                    } elseif($contents == ',') {
                        $openAttr   = "";
                        unset($variable);
                    }
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
        }
        
        return $this->results;
    }
}