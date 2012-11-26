<?php

use Documentor\ThemeResource;

function displayLinkOrClassname(ThemeResource $resource, $className, $origin = null) {

    $className = $resource->getResolver()->resolveClassName($className);

    if ($resource->getResolver()->isIndexed($className)) {
        return sprintf("[%s](%s)", $className, $resource->url($className, 'class', $origin) .'.md');
    }

    return $className;
}