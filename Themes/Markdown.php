<?php
namespace Documentor\Themes;

use Documentor\AbstractTheme;
use Documentor\Project;

class Markdown extends AbstractTheme
{
    /**
     * @var Project
     */
    protected $project;

    /**
     * @var string
     */
    protected $targetDirectory;

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct(Project $project, $targetDirectory)
    {
        parent::__construct($project, $targetDirectory);

        $this->setFileExtension("md");
    }

    /**
     *
     * @return boolean
     */
    public function generate()
    {
        if (!is_dir($this->targetDirectory)) {
           if (!@mkdir($this->targetDirectory, 0777, true)) {
               throw new \Documentor\Exception(
                    sprintf(
                         "Unable to create documentation directory: %s",
                         $this->targetDirectory
                    )
               );
           }
        }

        foreach ($this->project->getNamespaces() as $nsName) {
            $this->generateNamespaceDoc($nsName);
        }

        $this->generateDocIndex();

        return true;
    }

    public function generateDocIndex()
    {

    }

    public function generateNamespaceDoc($nsName)
    {
        echo $nsName .'<br />';
    }

    public function generateClassDoc($className)
    {

    }
}