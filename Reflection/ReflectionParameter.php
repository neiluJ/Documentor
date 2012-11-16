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
namespace Documentor\Reflection;

use Documentor\AbstractReflector;

/**
 * @category   Parsers
 * @package    Documentor
 * @subpackage Reflection
 * @author     Julien Ballestracci <julien@nitronet.org>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://github.com/neiluj/Documentor
 */
class ReflectionParameter
{
    protected $name;

    protected $nullable = false;

    protected $declaringFunction = null;

    protected $declaringClass = null;

    protected $defaultValue = null;

    protected $position;

    protected $type = null;

    protected $optional = false;

    protected $reference = false;

    public function __construct($name, $nullable = false, $type = null,
        $defaultValue = null, $reference = false
    ) {
        $this->name     = $name;
        $this->optional = $nullable;
        $this->type     = $type;
        $this->defaultValue = $defaultValue;
        $this->reference = $reference;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function allowsNull()
    {
        return $this->nullable;
    }

    public function setNullable($allowsNull)
    {
        $this->allowsNull = (bool)$allowsNull;
    }

    public function getDeclaringFunction()
    {
        return $this->declaringFunction;
    }

    public function setDeclaringFunction(ReflectionFunction $declaringFunction)
    {
        $this->declaringFunction = $declaringFunction;
    }

    public function getDeclaringClass()
    {
        return $this->declaringClass;
    }

    public function setDeclaringClass(ReflectionClass $declaringClass)
    {
        $this->declaringClass = $declaringClass;
    }

    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = (int)$position;
    }

    public function isArray()
    {
        return strtolower($this->type) == "array";
    }

    public function setType($type)
    {
        $this->type = (bool)$type;
    }

    public function isOptional()
    {
        return $this->optional;
    }

    public function setOptional($optional)
    {
        $this->optional = (bool)$optional;
    }

    public function isPassedByReference()
    {
        return $this->reference;
    }

    public function setReference($reference)
    {
        $this->reference = (bool)$reference;
    }
}