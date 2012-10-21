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
class ConstantParser extends AbstractParser
{
    public function parse()
    {
        if(!isset($this->results)) {
            $tokens     = $this->getTokens();
            $openConst  = false;
            $startLine  = 0;
            $openClass  = false;
            
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
                    if($openClass == 1) {
                        $openClass = false;
                    } else {
                        $openClass--;
                    }
                    continue;
                } elseif ($contents == '{') {
                    if($openClass === false) {
                        $openClass = 1;
                    } else {
                        $openClass++;
                    }
                    continue;
                }
                
                
                if ($tok == \T_CLASS || $tok == \T_INTERFACE) {
                    $openClass = 1;
                    continue;
                } elseif ($tok == \T_CONST && $openClass != false) {
                    if (is_string($openConst)) {
                        throw new \Exception(sprintf(
                            "Parser error: double CONST (%s:%s).", 
                            $this->filePath, 
                            $line
                        ));
                    }
                    $openConst = "";
                    $startLine = $line;
                    continue;
                }
                
                if (is_string($openConst) && $contents != ';') {
                    $openConst .= $contents;
                } elseif (is_string($openConst) && $contents == ';') {
                    $constant = trim($openConst);

                    $cname = trim(\substr($constant, 0, strpos($constant, '=')));
                    $value = trim(\substr($constant, strpos($constant, '=') + 1, strlen($constant)));

                    $this->results[] = array(
                        'name'      => $cname,
                        'value'     => $value,
                        'startLine' => $startLine,
                        'endLine'   => $line
                    );
                    $openConst = false;
                }
            }
        }
        
        return $this->results;
    }
}