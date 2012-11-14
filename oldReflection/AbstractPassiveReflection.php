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
 * @category   Reflection
 * @package    Documentor
 * @subpackage Reflection
 * @author     Julien Ballestracci <julien@nitronet.org>
 * @copyright  2012-2013 Julien Ballestracci <julien@nitronet.org>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://github.com/neiluj/Documentor
 */
namespace Documentor\Reflection;

use Documentor\DocComment;

/**
 * PassiveReflection Abstract Class
 *
 * This class is a base class for any passive reflection class
 *
 * @category   Reflection
 * @package    Documentor 
 * @subpackage Reflection
 * @author     Julien Ballestracci <julien@nitronet.org>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://github.com/neiluj/Documentor
 */
abstract class AbstractPassiveReflection implements \Reflector, PassiveReflectorInterface {
    /**
     * Parsing data
     *
     * @var array
     */
    protected $db;

    /**
     * Reflected file containing this class
     *
     * @var PassiveReflectorInterface
     */
    protected $parent;

    /**
     * Returns the documentation block object
     *
     * @var DocComment
     */
    protected $docComment;


    /**
     * Constructor
     *
     * Toolbox for reflected class informations
     *
     * @param array $db Data fetched from file
     * @param PassiveReflectorInterface $parent Parent reflector (if any)
     * @return void
     */
    public function __construct(array $db, PassiveReflectorInterface $parent = null) {
        $this->db = $db;
        $this->parent = $parent;
    }

     /**
     * Tells if the file has a main documentation block
     *
     * @return boolean
     */
    public function hasDocComment() {

        return !empty($this->db['docBlock']);
    }

     /**
     * Returns a comment block object
     *
     * @return DocComment
     */
    public function getDocComment() {
        if(!isset($this->docComment)) {
               $this->docComment = new DocComment($this->db['docBlock']);
        }

        return $this->docComment;
    }

    /**
     * Tells if this reflected component has a parent
     *
     * @return boolean
     */
    public function hasParent() {

        return $this->parent instanceof PassiveReflectorInterface;
    }

    /**
     * Return this component parent, or throws an exception if no parent is
     * defined.
     * 
     * @return PassiveReflectorInterface
     */
    public function getParent() {
        if(!$this->hasParent())
                throw new \Exception(sprintf('%s has no parent defined', $this));

        return $this->parent;
    }

    /**
     * Tells if this components file (if any)
     *
     * @return Documentor\File;
     */
    public function getFile() {

        return $this->getParent()->getFile();
        
    }

    /**
     * Tells if this reflected component has a file
     *
     * @return boolean
     */
    public function hasFile() {

        return $this->getParent()->hasFile();
    }

    /**
     * Returns the class name
     *
     * @return string
     */
    public function __toString() {

        return $this->getName();
    }

    /**
     * Returns the class name
     *
     * @return string
     */
    public static function export() {
        // return $this->__toString();
    }

    /**
     * Return the internal reflection db (advanced)
     *
     * @return array
     */
    public function getDb() {
        
        return $this->db;
    }
}