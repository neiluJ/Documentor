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
use Documentor\Reflection\ReflectionFunction;


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
        if (!isset($results['namespace']) || !is_array($results['namespace'])) {
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
     * @param string $name
     *
     * @return string
     */
    protected function getItemFullName($name)
    {
        return rtrim($this->getNamespace(), '\\') . '\\' . $name;
    }
}