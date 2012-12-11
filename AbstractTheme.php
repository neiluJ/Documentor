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
 *
 * @category Library
 * @package  Documentor
 * @author   Julien Ballestracci <julien@nitronet.org>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     http://github.com/neiluj/Documentor
 */
abstract class AbstractTheme implements Theme
{
    protected $targetDirectory;

    protected $fileExtension = 'html';

    protected $indexFilename = 'index';

    /**
     *
     * @var Project
     */
    protected $project;

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct(Project $project, $targetDirectory)
    {
        $this->project = $project;
        $this->targetDirectory = $targetDirectory;
    }

    public function getFileExtension()
    {
        return $this->fileExtension;
    }

    public function setFileExtension($fileExtension)
    {
        $this->fileExtension = $fileExtension;
    }

    public function getIndexFilename()
    {
        return $this->indexFilename;
    }

    public function setIndexFilename($indexFilename)
    {
        $this->indexFilename = $indexFilename;
    }

    public function urlClass($className)
    {
        ;
    }

    public function urlFunction($funcName)
    {
        ;
    }

    public function urlNamespace($namespaceName)
    {
        ;
    }

    protected function getTargetFilename($thing, $prefix = null)
    {
        if (strpos($thing, '\\', 0) === 0) {
            $thing = ($prefix == self::FOLDER_NAMESPACES ? self::DEFAULT_NS_NAME . substr($thing, 1) : substr($thing, 1));
        }

        return $this->targetDirectory .
                DIRECTORY_SEPARATOR .
                (!is_null($prefix) ? $prefix . DIRECTORY_SEPARATOR : null) .
                str_replace('\\', DIRECTORY_SEPARATOR, $thing) .
                '.'. $this->fileExtension;
    }

    protected function prepareTargetDirectory()
    {
        if (!is_dir($this->targetDirectory)) {
           if (!@mkdir($this->targetDirectory, 0777, true)) {
               throw new Exception(
                    sprintf(
                         "Unable to create documentation directory: %s",
                         $this->targetDirectory
                    )
               );
           }
        }

        return true;
    }

    protected function prepareDocFile($filePath)
    {
        $dir = dirname($filePath);
        if (strpos($dir, $this->targetDirectory) === false) {
            throw new Exception(
                sprintf(
                     "Can't prepare file '%s': outside of the target directory",
                     $filePath
                )
           );
        }

        if ($dir == $this->targetDirectory) {
            return true;
        } elseif (!is_dir($dir)) {
           if (!@mkdir($dir, 0777, true)) {
               throw new Exception(
                    sprintf(
                         "Unable to create documentation directory: %s",
                         $dir
                    )
               );
           }
        }

        if (is_file($filePath)) {
            @unlink($filePath);
        }

        return true;
    }

    /**
     *
     * @param string $componentName
     * @param string $type
     * @param string $originName
     *
     * @return string
     */
    public function url($componentName, $type, $originName = null)
    {
        $xpl        = explode('\\', ltrim($componentName, '\\'));
        $typeName   = null;
        $url        = array();

        if (null !== $originName) {
            $xpl2   = explode('\\', ltrim($originName, '\\'));
            $cnt    = count($xpl2);
            if (count($cnt)) {
                for ($x = 0; $x < $cnt; $x++) {
                    array_push($url, "..");
                }
            }
        } else {
            array_push($url, ".");
        }

        switch($type)
        {
            case 'namespace':
                $typeName = 'namespaces';
                break;

            case 'class':
                $typeName = 'classes';
                break;

            default:
                break;
        }

        if(empty($typeName)) {
            throw new \InvalidArgumentException(
                '$type parameter should be either "namespace" or "class"'
            );
        }

        array_push($url, $typeName);
        foreach ($xpl as $compt) {
            array_push($url, $compt);
        }

        return implode('/', $url) . '.' . $this->getFileExtension();
    }
}