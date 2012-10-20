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
class ImportsParser extends AbstractParser
{
    public function parse()
    {
        if(!isset($this->results)) {
            $tokens     = $this->getTokens();
            $openUse    = false;
            $openAs     = false;
            $uses       = array();
            $startLine  = 0;
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

                if ($contents == '}') {
                        $inFunction--;
                    continue;
                } elseif ($contents == '{') {
                        $inFunction++;
                    continue;
                }
                
               if ($tok == \T_USE && !$inFunction) {
                    if (\is_string($openUse)) {
                        throw new \Exception(sprintf(
                            "Parser error: double USE (%s:%s).", 
                            $this->filePath, 
                            $line
                        ));
                    }
                    
                    $startLine = $line;
                    $openUse = "";
                    continue;
                }

                elseif ($tok == \T_AS && is_string($openUse)) {
                    if (\is_string($openAs)) {
                        throw new \Exception(sprintf(
                            "Parser error: double AS (%s:%s).", 
                            $this->filePath, 
                            $line
                        ));
                    }
                    
                    $openAs = "";
                    continue;
                }
                
                elseif (is_string($openUse) && !is_string($openAs) && ($contents != ';' && $contents != ',')) {
                    $openUse .= $contents;
                } elseif (is_string($openUse) && is_string($openAs) && ($contents != ';' && $contents != ',')) {
                    $openAs .= $contents;
                } elseif (is_string($openUse) && (is_string($openAs) || $openAs == false) && ($contents == ';' || $contents == ',')) {
                    $this->results[] = array(
                        'import'    => trim($openUse),
                        'alias'     => (!is_string($openAs) ? null : trim($openAs)),
                        'startLine' => $startLine,
                        'endLine'   => $line
                    );
                    
                    $openUse = ($contents == ',' ? "" : false);
                    $openAs = false;
                }
            }
        }
        
        return $this->results;
    }
}