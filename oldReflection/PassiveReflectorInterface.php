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
 * 
 * @category   Reflection
 * @package    Documentor 
 * @subpackage Reflection
 * @author     Julien Ballestracci <julien@nitronet.org>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://github.com/neiluj/Documentor
 */
interface PassiveReflectorInterface {

    /**
     * Return the name of the reflected component
     *
     * @return string
     */
    public function getName();

     /**
     * Tells if the file has a main documentation block
     *
     * @return boolean
     */
    public function hasDocComment();

     /**
     * Returns a comment block object
     *
     * @return DocComment
     */
    public function getDocComment();

    /**
     * Tells if this reflected component has a parent
     *
     * @return boolean
     */
    public function hasParent();

    /**
     * Return this component parent, or throws an exception if no parent is
     * defined.
     *
     * @return PassiveReflectorInterface
     */
    public function getParent();

    /**
     * Tells if this reflected component has a file
     *
     * @return boolean
     */
    public function hasFile();

    /**
     * Return this component file
     *
     * @return Reflection\File
     */
    public function getFile();
}