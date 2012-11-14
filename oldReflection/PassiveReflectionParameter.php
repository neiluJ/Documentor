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

/**
 * Parameter Reflection
 *
 * @category   Reflection
 * @package    Documentor 
 * @subpackage Reflection
 * @author     Julien Ballestracci <julien@nitronet.org>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://github.com/neiluj/Documentor
 */
class PassiveReflectionParameter extends AbstractPassiveReflection {
    
    /**
     * Return this method name
     *
     * @return string
     */
    public function getName() {
        
        return $this->db['name'];
    }

    /**
     * Return this method's signature
     *
     * @return string
     */
    public function getSignature() {
        
        return $this->db['signature'];
    }


    /**
     * Tells if this method is abstract
     *
     * @return boolean
     */
    public function isAbstract() {
        if($this->isAttribute())
            return $this->db['abstract'];

        return false;
    }

    /**
     * Tells if this method is final
     *
     * @return boolean
     */
    public function isFinal() {
        if($this->isAttribute())
            return $this->db['final'];

        return false;
    }

    /**
     * Tells if this method is static
     *
     * @return boolean
     */
    public function isStatic() {
        if($this->isAttribute())
            return $this->db['static'];

        return false;
    }

    /**
     * Tells if this method is public
     *
     * @return boolean
     */
    public function isPublic() {
        if($this->isAttribute())
            return $this->db['visibility'] == 'public';

        return false;
    }

    /**
     * Tells if we're reflecting a class attribute or a parameter
     * 
     * @return boolean
     */
    public function isAttribute() {
        if($this->parent instanceof PassiveReflectionClass)
                return true;

        return false;
    }

    /**
     *
     * @return boolean
     */
    public function isOptional() {
        if($this->isAttribute())
                return false;

        return $this->db['optional'];
    }

    /**
     *
     * @return boolean
     */
    public function isPassedByReference() {
        if($this->isAttribute())
                return false;

        return $this->db['reference'];
    }

    /**
     * 
     * @return boolean
     */
    public function hasDefaultValue() {

        return (isset($this->db['defaultValue']) && $this->db['defaultValue'] !== -1);
    }

    /**
     * 
     * @return string
     */
    public function getType() {
        if(isset($this->db['type'])) {
            return $this->db['type'];
        }

        return null;
    }

    /**
     *
     * @return string
     */
    public function getTypeFull() {
        if(isset($this->db['type'])) {
            if(\stripos($this->db['type'], 'array') !== false)
                    return 'Array';

            elseif(\strpos($this->db['type'], '\\') === 0)
                    return $this->db['type'];

            return $this->getFile()->getNamespacedName($this->db['type']);
        }

        return null;
    }
    
    /**
     *
     * @return mixed
     */
    public function getDefaultValue() {
        
        return $this->db['defaultValue'];
    }

    /**
     * Tells if this method is private
     *
     * @return boolean
     */
    public function isPrivate() {
        if($this->isAttribute())
            return $this->db['visibility'] == 'private';

        return false;
    }

    /**
     * Tells if this method is protected
     *
     * @return boolean
     */
    public function isProtected() {

        if($this->isAttribute())
            return $this->db['visibility'] == 'protected';

        return false;
    }

     /**
     * Return this method's visibility (public, private or protected)
     *
     * @return string
     */
    public function getVisibility() {

        return $this->db['visibility'];
    }
}
