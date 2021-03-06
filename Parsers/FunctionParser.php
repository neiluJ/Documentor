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
class FunctionParser extends AbstractParser
{
    public function parse()
    {
        if(!isset($this->results)) {
            $tokens     = $this->getTokens();
            $startLine  = 0;
            $openFunction = false;
            $name       = null;
            $signature  = null;
            
            $level      = 0;
            foreach ($tokens as $num => $token) {
                if (!is_array($token)) {
                    $tok = $token;
                    $contents = $token;
                } else {
                    $tok = $token[0];
                    $contents = $token[1];
                    $line = $token[2];
                }

                if ($contents == '{') {
                    $level++;
                } elseif ($contents == '}') {
                    $level--;
                }
                
                if ($tok == \T_FUNCTION && $level == 0) {
                    if (\is_string($openFunction)) {
                        continue; // support Closures
                    }
                    $openFunction = "";
                    $startLine = $line;
                    continue;
                } 
                
                if (is_string($openFunction) && $contents != '{') {
                    $openFunction .= $contents;
                } elseif (is_string($openFunction) && $contents == '{') {
                    $name = \substr(trim($openFunction), 0, \strpos(trim($openFunction), '('));
                    $name = trim($name);

                    $signature      = 'function '. trim($openFunction);
                }
                
                if ($contents == '}') {
                    if($level == 0 && is_string($openFunction)) {
                        $this->results[] = array(
                           'name'      => $name,
                           'signature'  => $signature,
                           'startLine'  => $startLine,
                           'endLine'    => $line+1
                        );
                        $name           = null;
                        $signature      = null;
                        $openFunction = false;
                    }
                } 
            }
        }
        
        return $this->results;
    }
}