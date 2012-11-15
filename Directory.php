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
 * Directory to explore
 *
 * @category Exceptions
 * @package  Documentor
 * @author   Julien Ballestracci <julien@nitronet.org>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     http://github.com/neiluj/Documentor
 */
class Directory implements \IteratorAggregate
{
    protected $path;

    protected $recursive = true;

    protected $excludes = array();

    protected $files;

    /**
     *
     * @param string  $path
     * @param boolean $recursive
     * @param array   $excludes
     *
     * @throws \Documentor\Exception
     */
    public function __construct($path, $recursive = true, array $excludes = array())
    {
        if (!is_dir($path)) {
            throw new Exception(
                sprintf("Invalid directory: %s", $path)
            );
        }

        $this->path         = $path;
        $this->recursive    = $recursive;
        $this->excludes     = $excludes;
    }

    /**
     *
     * @return \DirectoryIterator
     */
    public function getIterator()
    {
        if ($this->recursive) {
            $flags = \FilesystemIterator::SKIP_DOTS;
            $it = new \RecursiveDirectoryIterator($this->path, $flags);
            $iterator = new \RecursiveIteratorIterator(
                $it,
                \RecursiveIteratorIterator::SELF_FIRST
            );
        } else {
            $iterator = new \DirectoryIterator($this->path);
        }

        return $iterator;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }

    public function getRecursive()
    {
        return $this->recursive;
    }

    public function setRecursive($recursive)
    {
        $this->recursive = $recursive;
    }

    public function getExcludes()
    {
        return $this->excludes;
    }

    public function setExcludes($excludes)
    {
        $this->excludes = $excludes;
    }

    public function files()
    {
        if (!isset($this->files)) {
            $it = $this->getIterator();
            foreach ($it as $current) {
                $filePath   = $current->getPathname();
                $ext        = $current->getExtension();

                if ($this->isExcluded($filePath) || $current->isDir()
                    || !in_array($ext, array("php", "php3", "php4", "php5"))) {
                    continue;
                }

                $this->files[] = $filePath;
            }
        }

        return $this->files;
    }

    public function isExcluded($filePath)
    {
        return false;
    }

    /**
     *
     * @param string $path
     * @param boolean $recursive
     * @param array $excludes
     *
     * @return Directory
     */
    public static function factory($path, $recursive = true, array
        $excludes = array()
    ) {
        return new self($path, $recursive, $excludes);
    }
}