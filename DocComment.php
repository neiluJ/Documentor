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
    const GENERIC_TAG_KEY = '_generic';
    
    protected $block;

    protected $startLine;

    protected $endLine;

    protected $comment;
    
    /**
     * @var array
     */
    public static $tagsClasses = array(
        'param'     => 'Documentor\Tags\ParameterTag',
        // 'author'    => 'Documentor\Tags\AuthorTag',
        // 'license'   => 'Documentor\Tags\LicenseTag',
        // 'see'       => 'Documentor\Tags\SeeTag',
        self::GENERIC_TAG_KEY  => 'Documentor\Tags\GenericTag'
    );

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
    public function getComment()
    {
        if (!isset($this->comment)) {
            if (empty($this->block)) {
                $this->comment = "";
                return "";
            }

            $comment = "";
            $lines = \explode("\n", $this->block);
            foreach ($lines as $line) {
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

    /**
     *
     * @param string $text
     * 
     * @static
     * @return string 
     */
    protected static function fixHTML($text)
    {
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
     * @static
     * @return DocComment
     */
    public static function factory($block, $startLine = 0, $endLine = 0)
    {
        return new self($block, $startLine, $endLine);
    }
    
    /**
     *
     * @param string $name 
     * 
     * @return array
     */
    public function getTags($name)
    {
        $tmp    = \explode("\n", $this->block);
        $start  = false;
        $lines  = array();
        foreach ($tmp as $line) {
            $line = trim($line);
            if(strpos($line, '* ') === 0) {
                $line = substr($line, 2);
            }
            
            if ($line == '/**' || $line == '*/' || empty($line) 
                || $line == '*'
            ) {
                continue;
            }

            if (strpos($line, '@') === 0 && !$start) {
                $start = true;
                $lines[] = $line;
            } elseif ($start) {
                $lines[] = $line;
            }
        }
        
        $search = '@'. $name;
        $text   = false;
        $final  = array();
        $tagClassName = self::getTagClassName($name);
        foreach ($lines as $idx => $line) {
            if (stripos($line, $search, 0) === 0) {
                if(is_string($text)) {
                    $text = str_replace(array("\n", "\t"), array(" ", " "), $text);
                    $final[] = new $tagClassName($name, $text);
                }
                
                $text = trim(substr($line, strlen($name)+2));
                continue;
            } 
            
            if (!is_string($text)) {
                continue;
            } elseif (is_string($text) && (strpos($line, '@', 0) === 0
                    || !isset($lines[$idx+1]))) {
                $text = str_replace(array("\n", "\t"), array(" ", " "), $text);
                $final[] = new $tagClassName($name, $text);
                $text = false;
                continue;
            }
            
            $text .= ' '. trim($line);
        }
        
        if (is_string($text)) {
            $text = str_replace(array("\n", "\t"), array(" ", " "), $text);
            $final[] = new $tagClassName($name, $text);
        }
        
        return $final;
    }
    
    /**
     *
     * @param string $tagName 
     * 
     * @return Tag
     */
    public function getFirstTag($tagName)
    {
        $results = $this->getTags($tagName);
        
        return (isset($results[0]) ? $results[0] : null);
    }
    
    /**
     *
     * @param string $tagName 
     * 
     * @static
     * @return string
     */
    public static function getTagClassName($tagName)
    {
        if (!isset(self::$tagsClasses[$tagName])) {
            $tagName = self::GENERIC_TAG_KEY;
        }
        
        return self::$tagsClasses[$tagName];
    }
    
    /**
     *
     * @param string $tagName
     * @param string $className 
     * 
     * @static
     * @return void
     */
    public static function setTagClassName($tagName, $className)
    {
        self::$tagsClasses[$tagName] = $className;
    }
}