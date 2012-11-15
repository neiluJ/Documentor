<?php
namespace Documentor;

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