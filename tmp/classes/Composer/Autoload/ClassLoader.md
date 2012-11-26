# Class: [Composer\Autoload](../../../namespaces/Composer/Autoload.md) \ [ClassLoader](../../../classes/Composer/Autoload/ClassLoader.md) 

ClassLoader implements a PSR-0 class loader

See https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md

$loader = new \Composer\Autoload\ClassLoader();

// register classes with namespaces
$loader->add('Symfony\Component', __DIR__.'/component');
$loader->add('Symfony',           __DIR__.'/framework');

// activate the autoloader
$loader->register();

// to enable searching the include path (eg. for PEAR packages)
$loader->setUseIncludePath(true);

In this example, if you try to use a class in the Symfony\Component
namespace or one of its children (Symfony\Component\Console for instance),
the autoloader will first look for the class under the component/
directory, and it will then fallback to the framework/ directory if not
found before giving up.

This class is loosely based on the Symfony UniversalClassLoader.


Summary: [Methods](#methods-summary) - [Attributes](#attributes-summary)
## Methods Summary

* [add](#add)
* [addClassMap](#addclassmap)
* [findFile](#findfile)
* [getClassMap](#getclassmap)
* [getFallbackDirs](#getfallbackdirs)
* [getPrefixes](#getprefixes)
* [getUseIncludePath](#getuseincludepath)
* [loadClass](#loadclass)
* [register](#register)
* [setUseIncludePath](#setuseincludepath)
* [unregister](#unregister)


## Attributes Summary

* private  [$classMap](#classmap)
* private  [$fallbackDirs](#fallbackdirs)
* private  [$prefixes](#prefixes)
* private  [$useIncludePath](#useincludepath)

---

## Methods

### add

```
public function add($prefix, $paths)
```

Registers a set of classes


##### Parameters

* **$prefix** 
  The location(s) of the classes
* **$paths** 
  *no description*

##### Return type

```
mixed
```

---

### addClassMap

```
public function addClassMap(array $classMap)
```


##### Parameters

* **$classMap** 
  *no description*

##### Return type

```
mixed
```

---

### findFile

```
public function findFile($class)
```

Finds the path to the file where the class is defined.



##### Parameters

* **$class** 
  *no description*

##### Return type

```
string|null The path, if found
```

---

### getClassMap

```
public function getClassMap()
```


##### Return type

```
mixed
```

---

### getFallbackDirs

```
public function getFallbackDirs()
```


##### Return type

```
mixed
```

---

### getPrefixes

```
public function getPrefixes()
```


##### Return type

```
mixed
```

---

### getUseIncludePath

```
public function getUseIncludePath()
```

Can be used to check if the autoloader uses the include path to check
for classes.



##### Return type

```
bool
```

---

### loadClass

```
public function loadClass($class)
```

Loads the given class or interface.


##### Parameters

* **$class** 
  *no description*

##### Return type

```
bool|null True, if loaded
```

---

### register

```
public function register($prepend = false)
```

Registers this instance as an autoloader.


##### Parameters

* **$prepend** *(optional)*
  *no description*

##### Return type

```
mixed
```

---

### setUseIncludePath

```
public function setUseIncludePath($useIncludePath)
```

Turns on searching the include path for class files.


##### Parameters

* **$useIncludePath** 
  *no description*

##### Return type

```
mixed
```

---

### unregister

```
public function unregister()
```

Unregisters this instance as an autoloader.


##### Return type

```
mixed
```

---



## Attributes

### $classMap
```
private $classMap
```



##### Type


```
mixed*
```

---

### $fallbackDirs
```
private $fallbackDirs
```



##### Type


```
mixed*
```

---

### $prefixes
```
private $prefixes
```



##### Type


```
mixed*
```

---

### $useIncludePath
```
private $useIncludePath
```



##### Type


```
mixed*
```

---

