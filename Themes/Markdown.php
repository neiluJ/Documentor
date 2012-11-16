<?php
namespace Documentor\Themes;

use Documentor\AbstractTheme;
use Documentor\Project;
use Documentor\ThemeResource;

class Markdown extends AbstractTheme
{
    /**
     * Constructor
     *
     * @return void
     */
    public function __construct(Project $project, $targetDirectory)
    {
        parent::__construct($project, $targetDirectory);

        $this->setFileExtension("md");
        $this->setIndexFilename('README');
    }

    /**
     *
     * @return boolean
     */
    public function generate()
    {
        $this->prepareTargetDirectory();

        foreach ($this->project->getNamespaces() as $nsName) {
            $this->generateNamespaceDoc($nsName);
        }

        $this->generateDocIndex();

        return true;
    }

    protected function generateDocIndex()
    {
        $fileName = $this->getTargetFilename($this->indexFilename);
        echo "writing doc file: $fileName<br />";
    }

    protected function generateNamespaceDoc($nsName)
    {
        $fileName = $this->getTargetFilename($nsName, \Documentor\Theme::FOLDER_NAMESPACES);
        if (!$this->prepareDocFile($fileName)) {
            throw new \Documentor\Exception(sprintf("Unable to prepare file directory: %s", $fileName));
        }

        echo "writing doc file: $fileName ...";
        $resource = new ThemeResource(
            __DIR__ .'/Resources/markdown/namespace.phtml',
            array(
                'namespaceName' => $nsName
            )
        );
        $resource->setProject($this->project);
        $resource->setType(ThemeResource::TYPE_NAMESPACE);

        file_put_contents($fileName, $resource->execute());
        echo "ok.<br />";
    }

    protected function generateClassDoc($className)
    {

    }
}