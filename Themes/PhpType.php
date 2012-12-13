<?php
namespace Documentor\Themes;

use Documentor\ThemeType;

class PhpType implements ThemeType
{
    protected $resourcesDir;

    protected $indexFilename;

    protected $filesExtension;

    /**
     * Constructor
     *
     * @param string $resourcesDir
     * @param string $fileExtension
     * @param string $indexFilename
     *
     * @return void
     */
    public function __construct($resourcesDir, $indexFilename = 'index',
        $filesExtension = 'html'
    ) {
        $this->resourcesDir     = $resourcesDir;
        $this->indexFilename    = $indexFilename;
        $this->filesExtension   = $filesExtension;
    }

    /**
     * @return string
     */
    public function getResourcesDir()
    {
        return $this->resourcesDir;
    }

    /**
     *
     * @param string $resourcesDir
     *
     * @return PhpType
     */
    public function setResourcesDir($resourcesDir)
    {
        $this->resourcesDir = $resourcesDir;

        return $this;
    }

    /**
     *
     * @return string
     */
    public function generate(\Documentor\ThemeResource $resource)
    {
        if ($resource->isType(\Documentor\ThemeResource::TYPE_CLASS)) {
            $file = 'class.phtml';
        } elseif ($resource->isType(\Documentor\ThemeResource::TYPE_NAMESPACE)) {
            $file = 'namespace.phtml';
        } elseif ($resource->isType(\Documentor\ThemeResource::TYPE_INDEX)) {
            $file = 'docindex.phtml';
        } else {
            throw new \Documentor\Exception(
                sprintf('Invalid Theme Resource Type: %s', $resource->getType())
            );
        }

        $fullfile = rtrim($this->resourcesDir, DIRECTORY_SEPARATOR) .
                    DIRECTORY_SEPARATOR . $file;

        if (!is_file($fullfile)) {
            throw new \Documentor\Exception(
                sprintf('Invalid Theme Resource File: %s', $fullfile)
            );
        }

        ob_start();
        include $fullfile;
        $contents = ob_get_clean();

        return $contents;
    }

    /**
     *
     * @return string
     */
    public function getIndexFilename()
    {
        return $this->indexFilename;
    }

    /**
     *
     * @param string $indexFilename
     *
     * @return \Documentor\Themes\PhpType
     */
    public function setIndexFilename($indexFilename)
    {
        $this->indexFilename = $indexFilename;

        return $this;
    }

    /**
     *
     * @return string
     */
    public function getFilesExtension()
    {
        return $this->filesExtension;
    }

    /**
     *
     * @param string $filesExtension
     *
     * @return \Documentor\Themes\PhpType
     */
    public function setFilesExtension($filesExtension)
    {
        $this->filesExtension = $filesExtension;

        return $this;
    }
}