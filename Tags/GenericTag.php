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
 * @category   Documentation
 * @package    Documentor
 * @subpackage Tags
 * @author     Julien Ballestracci <julien@nitronet.org>
 * @copyright  2012-2013 Julien Ballestracci <julien@nitronet.org>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://github.com/neiluj/Documentor
 */
namespace Documentor\Tags;

use Documentor\Tag;

/**
 * This class represent a generic documentation tag
 * like @author, @version ...
 *
 * It can also be herited by other tag classes
 *
 * @category   Library
 * @package    Documentor
 * @subpackage Tags
 * @author     Julien Ballestracci <julien@nitronet.org>
 * @copyright  2012-2013 Julien Ballestracci <julien@nitronet.org>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://github.com/neiluj/Documentor
 */
class GenericTag implements Tag
{
    /**
     * Tag name
     *
     * @var string
     */
    protected $name;
    /**
     * Line of content for this tag
     *
     * @var string
     */
    protected $text;

    /**
     * Create a new generic tag
     * 
     * @param string $name  Tag name
     * @param string $line  Content
     * 
     * @return void
     */
    public function __construct($name, $text = null)
    {
        $this->name = $name;
        $this->text = $text;
    }

    /**
     * Returns this tag name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @param string $tagName 
     * 
     * @return void
     */
    public function setName($tagName)
    {
        $this->name = $tagName;
    }
    
    /**
     * Return the complete comment line of this tag
     *
     * @return string
     */
    public function __toString() {

        return '@'. $this->name .' '. $this->text;
    }
    
    /**
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     *
     * @param string $text 
     * 
     * @return void
     */
    public function setText($text)
    {
        $this->text = $text;
    }
}
