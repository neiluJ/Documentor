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

/**
 * This class is used to parse and extract informations from comment blocks
 *
 * @category Library
 * @package  Documentor
 * @author   Julien Ballestracci <julien@nitronet.org>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     http://github.com/neiluj/Documentor
 */
class DocComment
{
    protected $block;

    protected $startLine;

    protected $endLine;

    protected $comment;

    /**
     * Constructor
     *
     * Initialize a comment-block
     *
     * @param string $comment
     *
     * @return void
     */
    public function __construct($comment, $startLine = 0, $endLine = 0)
    {
        $this->block        = $comment;
        $this->startLine    = $startLine;
        $this->endLine      = $endLine;
    }

    /**
     * Returns the comment string
     *
     * @return string
     */
    public function getComment() {
        if (!isset($this->comment)) {
            if (empty($this->block)) {
                $this->comment = "";
                return "";
            }

            $comment = "";
            $lines = \explode("\n", $this->block);
            foreach((array)$lines as $line) {
                $line = trim($line);
                if ($line == '/**' || $line == '*/') {
                    continue;
                }

                $line = ltrim($line, '* ');
                if (\strpos($line, '@') !== 0) {
                    $comment .= (empty($line) ? "\n" : $line ."\n");
                }
            }

            $this->comment = $comment;
        }

        return $this->comment;
    }

    protected static function fixHTML($text) {
        $text = htmlspecialchars($text, \ENT_QUOTES, "utf-8");
        $text = preg_replace("/=/", "=\"\"", $text);
        $text = preg_replace("/&quot;/", "&quot;\"", $text);
        $tags = "/&lt;(\/|)(\w*)(\ |)(\w*)([\\\=]*)(?|(\")\"&quot;\"|)(?|(.*)?&quot;(\")|)([\ ]?)(\/|)&gt;/i";
        $replacement = "<$1$2$3$4$5$6$7$8$9$10>";
        $text = preg_replace($tags, $replacement, $text);
        $text = preg_replace("/=\"\"/", "=", $text);

        $text = \strip_tags($text, '<p><a><strong><code><pre><u><i><h4><h3><h2><h1><h5><blockquote><br>');
        return  nl2br(trim($text));;
    }

    /**
     * Returns the raw comment block
     *
     * @return string
     */
    public function __toString()
    {
        return ($this->block === null ? "" : $this->block);
    }

    /**
     *
     * @param string $block
     * @param integer $startLine
     * @param integer $endLine
     *
     * @return DocComment
     */
    public static function factory($block, $startLine = 0, $endLine = 0)
    {
        return new self($block, $startLine, $endLine);
    }
}