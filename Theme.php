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

use Documentor\Reflection\ReflectionClass;

/**
 * @category Library
 * @package  Documentor
 * @author   Julien Ballestracci <julien@nitronet.org>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     http://github.com/neiluj/Documentor
 */
class Theme
{
    const DEFAULT_NS_NAME   = '_global';
    const FOLDER_NAMESPACES = 'namespaces';
    const FOLDER_CLASSES    = 'classes';

    /**
     * @var ThemeType
     */
    protected $type;

    /**
     * Constructor
     *
     * @param ThemeType $type
     *
     * @return void
     */
    public function __construct(ThemeType $type)
    {
        $this->type = $type;
    }

    /**
     *
     * @return ThemeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *
     * @param ThemeType $type
     *
     * @return Theme
     */
    public function setType(ThemeType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     *
     * @param string $nsName
     * @param \Documentor\Project $project
     *
     * @return string
     */
    public function documentationNamespace($nsName, Project $project)
    {
        return $this
            ->getType()
            ->generate(
                ThemeResource::factory(array('namespaceName' => $nsName))
                ->setProject($project)
                ->setType(ThemeResource::TYPE_NAMESPACE)
            );
    }

    /**
     *
     * @param ReflectionClass $class
     * @param Project $project
     *
     * @return string
     */
    public function documentationClass(ReflectionClass $class,
        Project $project
    ) {
        return $this
            ->getType()
            ->generate(
                ThemeResource::factory()
                ->setProject($project)
                ->setType(ThemeResource::TYPE_CLASS)
                ->setReflector($class)
                ->setResolver(new Resolver($project, $class))
             );
    }

    public function documentationIndex(Project $project)
    {
        return $this
            ->getType()
            ->generate(
                ThemeResource::factory()
                ->setProject($project)
                ->setType(ThemeResource::TYPE_INDEX)
            );
    }


    public function write(Project $project, $targetDirectory)
    {
        $this->prepareTargetDirectory($targetDirectory);

        foreach ($project->getNamespaces() as $nsName) {
            $fileName = $this->getTargetFilename($targetDirectory, $nsName, self::FOLDER_NAMESPACES);
            if (!$this->prepareDocFile($fileName)) {
                throw new \Documentor\Exception(
                    sprintf("Unable to prepare file directory: %s", $fileName)
                );
            }

            file_put_contents($fileName, $this->documentationNamespace($nsName, $project));

            foreach ($project->getNamespaceClasses($nsName) as $class) {
                $className = $class->getName();
                $fileName = $this->getTargetFilename($targetDirectory, $className, self::FOLDER_CLASSES);
                if (!$this->prepareDocFile($fileName)) {
                    throw new \Documentor\Exception(
                        sprintf("Unable to prepare file directory: %s", $fileName)
                    );
                }

                file_put_contents($fileName, $this->documentationClass($class, $project));
            }
        }

        // $this->generateDocIndex();

        return true;
    }

    protected function getTargetFilename($targetDirectory, $thing, $prefix = null)
    {
        if (strpos($thing, '\\', 0) === 0) {
            $thing = ($prefix == self::FOLDER_NAMESPACES ? self::DEFAULT_NS_NAME . substr($thing, 1) : substr($thing, 1));
        }

        return $targetDirectory .
                DIRECTORY_SEPARATOR .
                (!is_null($prefix) ? $prefix . DIRECTORY_SEPARATOR : null) .
                str_replace('\\', DIRECTORY_SEPARATOR, $thing) .
                '.'. $this->getType()->getFilesExtension();
    }

    protected function prepareTargetDirectory($targetDirectory)
    {
        if (!is_dir($targetDirectory)) {
           if (!mkdir($targetDirectory, 0777, true)) {
               throw new Exception(
                    sprintf(
                         "Unable to create documentation directory: %s",
                         $targetDirectory
                    )
               );
           }
        }

        return true;
    }

    protected function prepareDocFile($filePath)
    {
        $dir = dirname($filePath);
        if (!is_dir($dir)) {
           if (!mkdir($dir, 0777, true)) {
               throw new Exception(
                    sprintf(
                         "Unable to create documentation directory: %s",
                         $dir
                    )
               );
           }
        }

        if (is_file($filePath)) {
            unlink($filePath);
        }

        return true;
    }
}