<?php

use Documentor\ThemeResource;
use Documentor\Tags\ReturnTag;

function displayLinkOrClassname(ThemeResource $resource, $className, 
    $origin = null
) {
    $className = $resource->getResolver()->resolveClassName($className);

    if ($resource->getResolver()->isIndexed($className)) {
        return sprintf("[%s](%s)", $className, $resource->url($className, 'class', $origin) .'.md');
    }

    return $className;
}

function internals() {
 return array(
    'boolean' => array(
        'names' => array("boolean", "bool"),
        'link'  => "http://php.net/manual/en/language.types.boolean.php"
    ),
    'integer' => array(
        'names' => array("int", "integer", "number"),
        'link'  => "http://php.net/manual/en/language.types.integer.php"
    ),
    'float' => array(
        'names' => array("float", "long"),
        'link'  => "http://php.net/manual/en/language.types.float.php"
    ),
    'string' => array(
        'names' => array("string", "str", "text"),
        'link'  => "http://php.net/manual/en/language.types.string.php"
    ),
    'object' => array(
        'names' => array("object", "obj"),
        'link'  => "http://php.net/manual/en/language.types.object.php"
    ),
    'resource' => array(
        'names' => array("resource"),
        'link'  => "http://php.net/manual/en/language.types.resource.php"
    ),
    'null' => array(
        'names' => array("null", "nil"),
        'link'  => "http://php.net/manual/en/language.types.null.php"
    ),
    'callable' => array(
        'names' => array("callable", "closure", "function"),
        'link'  => "http://php.net/manual/en/language.types.callable.php"
    ),
    'array' => array(
        'names' => array("array", "arr", "list"),
        'link'  => "http://php.net/manual/en/language.types.array.php"
    ),
    'mixed'     => array(
        'names' => array("mixed"),
        'link'  => null
    ),
    'void'     => array(
        'names' => array("void"),
        'link'  => null
    )
);
}

function isInternalType($typeName)
{
    $typeName = strtolower($typeName);
    foreach (internals() as $type => $infos) {
        $names = $infos['names'];
        if (in_array($typeName, $names)) {
            return true;
        }
    }
    
    return false;
}

function getInternalTypeInfos($typeName)
{
    $typeName = strtolower($typeName);
    foreach (internals() as $type => $infos) {
        $names = $infos['names'];
        if (in_array($typeName, $names)) {
            $infos['name'] = $type;
            return $infos;
        }
    }
    
    return null;
}

function typeLink(ThemeResource $resource, ReturnTag $returnTag, 
    $origin = null
) {
    $types  = $returnTag->getTypes();
    $ret    = array();
    
    foreach ($types as $typeName) {
        if (isInternalType($typeName)) {
            $infos = getInternalTypeInfos($typeName);
        } else {
            $className = $resource->getResolver()->resolveClassName($typeName);
            if ($resource->getResolver()->isIndexed($className)) {
                $infos = array(
                    'name'  => $className,
                    'link'  => $resource->url($className, 'class', $origin) .'.md'
                );
            } else {
                $infos = array('name' => $typeName, 'link' => null);
            }
        }
        
        if ($infos['link'] != null && !empty($infos['link'])) {
            array_push($ret, sprintf("[%s](%s)", $infos['name'], $infos['link']));
        } else {
            array_push($ret, $infos['name']);
        }
    }
    
    return implode('|', $ret);
}