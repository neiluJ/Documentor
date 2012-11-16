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
class PhpFileParser extends AbstractParser
{
    /**
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->addParsers(array(
            'namespace'     => new NamespaceParser(),
            'imports'       => new ImportsParser(),
            'functions'     => new FunctionParser(),
            'classes'       => new ClassParser(),
            'interfaces'    => new InterfaceParser(),
            'comments'      => new DocCommentParser()
        ));
    }

    public function parse()
    {
        if (!isset($this->results)) {
            parent::parse();

            $this->appendFunctionsComments();
            $this->appendClassesComments('classes');
            $this->appendClassesComments('interfaces');
        }
    }

    protected function appendFunctionsComments()
    {
        if(!isset($this->results) || !isset($this->results['functions'])
           || !is_array($this->results['functions'])
        ) {
            return;
        }

        foreach ($this->results['functions'] as $idx => $func) {
            $comment = $this->getDocCommentIdxForItemAtLine($func['startLine']);
            if  ($comment !== false) {
                $this->results['functions'][$idx]['comment'] = $this->results['comments'][$comment];
                unset($this->results['comments'][$comment]);
            } else {
                $this->results['functions'][$idx]['comment'] = null;
            }
        }
    }

    protected function appendClassesComments($appendType = 'classes')
    {
        if(!isset($this->results) || !isset($this->results[$appendType])
           || !is_array($this->results[$appendType])
        ) {
            return;
        }

        foreach ($this->results[$appendType] as $idx => $infos) {
            $comment = $this->getDocCommentIdxForItemAtLine($infos['startLine']);
            if  ($comment !== false) {
                $this->results[$appendType][$idx]['comment'] = $this->results['comments'][$comment];
                unset($this->results['comments'][$comment]);
            }

            if (isset($infos['attributes']) && is_array($infos['attributes'])) {
                foreach ($infos['attributes'] as $attr => $attrInfos) {
                    $comment = $this->getDocCommentIdxForItemAtLine($attrInfos['startLine']);
                    if  ($comment !== false) {
                        $this->results[$appendType][$idx]['attributes'][$attr]['comment'] = $this->results['comments'][$comment];
                        unset($this->results['comments'][$comment]);
                    }
                }
            }

            if (isset($infos['constants']) && is_array($infos['constants'])) {
                foreach ($infos['constants'] as $attr => $attrInfos) {
                    $comment = $this->getDocCommentIdxForItemAtLine($attrInfos['startLine']);
                    if  ($comment !== false) {
                        $this->results[$appendType][$idx]['constants'][$attr]['comment'] = $this->results['comments'][$comment];
                        unset($this->results['comments'][$comment]);
                    }
                }
            }

            if (isset($infos['methods']) && is_array($infos['methods'])) {
                foreach ($infos['methods'] as $attr => $attrInfos) {
                    $comment = $this->getDocCommentIdxForItemAtLine($attrInfos['startLine']);
                    if  ($comment !== false) {
                        $this->results[$appendType][$idx]['methods'][$attr]['comment'] = $this->results['comments'][$comment];
                        unset($this->results['comments'][$comment]);
                    }
                }
            }
        }
    }

    /**
     *
     * @param integer $endLineNo
     *
     * @return integer
     */
    protected function getDocCommentIdxForItemAtLine($itemStartLine)
    {
        if(!isset($this->results) || !isset($this->results['comments'])
           || !is_array($this->results['comments'])
        ) {
            return;
        }

        foreach ($this->results['comments'] as $idx => $comment)
        {
            if($comment['endLine'] == $itemStartLine-1) {
                return $idx;
            }
        }

        return false;
    }
}