<?php
namespace Documentor;


class Project
{
    protected $name;

    protected $directories = array();

    protected $version;

    protected $namespaces;

    protected $classes;

    protected $functions;

    protected $indexed = false;

    protected $hashes;

    public function __construct($name, $version)
    {
        $this->name     = $name;
        $this->version  = $version;
    }

    /**
     *
     * @param \Documentor\Directory $directory
     *
     * @return \Documentor\Project
     */
    public function add(Directory $directory)
    {
        $this->directories[$directory->getPath()] = $directory;

        return $this;
    }

    /**
     *
     * @return void
     */
    public function index()
    {
        if ($this->indexed) {
            return;
        }

        $namespaces = array();
        $classes    = array();
        $functions  = array();

        foreach ($this->directories as $dir) {
            foreach ($dir->files() as $file) {
                $interpret = new Interpret($file);
                $namespaces[] = $interpret->getNamespace();

                foreach ($interpret->getClassesNames() as $className) {
                    $classes[$className] = $file;
                }

                foreach ($interpret->getFunctionsNames() as $func) {
                    $functions[$func] = $file;
                }

                $this->hashes[$file] = sha1(json_encode($interpret->getParser()->getResults()));
                unset($interpret);
            }
        }

        $this->namespaces = array_values(array_unique($namespaces));
        sort($this->namespaces, SORT_ASC);

        $this->functions  = $functions;
        ksort($this->functions, SORT_ASC);

        $this->classes    = $classes;
        ksort($this->classes, SORT_ASC);

        $this->indexed = true;
    }

    public function getFilesCount()
    {
        $this->index();

        return count($this->hashes);
    }

    public function getNamespaces()
    {
        $this->index();

        return $this->namespaces;
    }

    public function getClasses()
    {
        $this->index();

        return $this->classes;
    }

    public function getFunctions()
    {
        $this->index();

        return $this->functions;
    }
}