<?php
/**
 * Fwk
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
 * @link      http://www.phpfwk.com
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
class NamespaceParser extends AbstractParser
{
    const DEFAULT_NAMESPACE = '\\';
    
    public function parse()
    {
        if(!isset($this->results)) {
            $tokens = $this->getTokens();
            $openNs = false;

            foreach ($tokens as $num => $token) {
                if (!is_array($token)) {
                    $tok = $token;
                    $contents = $token;
                    $line = 0;
                } else {
                    $tok = $token[0];
                    $contents = $token[1];
                    $line = $token[2];
                }

                if ($tok == \T_NAMESPACE) {
                    if (\is_string($openNs)) {
                        throw new \Exception(
                            "Parser error: double namespace (%s:%s).", 
                            $this->filePath, 
                            $line
                        );
                    }

                    $openNs = "";
                } elseif (is_string($openNs) && $contents != ';') {
                    $openNs .= $contents;
                } elseif (is_string($openNs) && $contents == ';') {
                    $namespace = trim($openNs);
                    $openNs = false;
                    
                    break; // only one namespace per file
                }
            }
        
            $this->results = array($openNs);
        }
        
        return $this->results;
    }
}