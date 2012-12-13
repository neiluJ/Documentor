<?php
namespace Documentor\Themes;

class MarkdownType extends PhpType
{
    public function __construct($resourcesDir = null,
        $indexFilename = 'README', $filesExtension = 'md'
    ) {
        if (null === $resourcesDir) {
            $resourcesDir = __DIR__ .'/Resources/markdown';
        }

        parent::__construct($resourcesDir, $indexFilename, $filesExtension);
    }
}