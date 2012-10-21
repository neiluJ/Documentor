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

use \RuntimeException;

/**
 *
 * @category Library
 * @package  Documentor
 * @author   Julien Ballestracci <julien@nitronet.org>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     http://github.com/neiluj/Documentor
 */
abstract class AbstractParser implements Parser
{
    /**
     * @var string 
     */
    protected $filePath;
    
    /**
     * @var array
     */
    protected $parsers = array();
    
    /**
     * @var array 
     */
    protected $results;
    
    /**
     * @var array
     */
    protected $tokens;
    
    public function __construct($filePath = null)
    {
        $this->filePath = $filePath;
    }
    
    /**
     *
     * @param Parser $parser
     * 
     * @return Parser 
     */
    public function addParser($key, Parser $parser)
    {
        $this->parsers[$key] = $parser;
        
        return $this;
    }
    
    /**
     *
     * @param array $parsers
     * 
     * @return Parser 
     */
    public function addParsers(array $parsers)
    {
        foreach ($parsers as $key => $parser) {
            $this->addParser($key, $parser);
        }
        
        return $this;
    }
    
    /**
     * 
     * @return array
     */
    public function parse()
    {
        if (!isset($this->results)) {
            $final = array();
            foreach ($this->parsers as $key => $parser) {
                $parser->setFilePath($this->filePath);
                $final[$key] = $parser->parse();
            }
            
            $this->results = $final;
        }

        return $this->results;
    }
    
    /**
     *
     * @return string 
     */
    public function getFilePath()
    {
        return $this->filePath;
    }
    
    /**
     *
     * @param string $filePath 
     * 
     * @return Parser
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
        
        return $this;
    }
    
    /**
     *
     * @return array 
     * @throws RuntimeException
     */
    protected function getTokens()
    {
        if  (!isset($this->tokens)) {
            if (!is_file($this->filePath) || !is_readable($this->filePath)) {
                throw new RuntimeException(
                    sprintf('Unable to find/open file: %s', $this->filePath)
                );
            }

            $this->tokens = token_get_all(file_get_contents($this->filePath));
        }
        
        return $this->tokens;
    }
}