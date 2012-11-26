# Class: [Documentor](../../namespaces/Documentor.md) \ [Directory](../../classes/Documentor/Directory.md) 

Directory to explore


Summary: [Methods](#methods-summary) - [Attributes](#attributes-summary)
## Methods Summary

* [__construct](#__construct)
* [factory](#factory)
* [files](#files)
* [getExcludes](#getexcludes)
* [getIterator](#getiterator)
* [getPath](#getpath)
* [getRecursive](#getrecursive)
* [isExcluded](#isexcluded)
* [setExcludes](#setexcludes)
* [setPath](#setpath)
* [setRecursive](#setrecursive)


## Attributes Summary

* protected  [$excludes](#excludes)
* protected  [$files](#files)
* protected  [$path](#path)
* protected  [$recursive](#recursive)

---

## Methods

### __construct

```
public function __construct($path, $recursive = true, array $excludes = array())
```




##### Parameters

* **$path** 
  
* **$recursive** *(optional)*
  $excludes
* **$excludes** *(optional)*
  *no description*

##### Return type

```
mixed
```

---

### factory

```
public static function factory($path, $recursive = true, array
        $excludes = array()
    )
```




##### Parameters

* **$path** 
  
* **$recursive** *(optional)*
  
* **$excludes** *(optional)*
  *no description*

##### Return type

```
Directory
```

---

### files

```
public function files()
```


##### Return type

```
mixed
```

---

### getExcludes

```
public function getExcludes()
```


##### Return type

```
mixed
```

---

### getIterator

```
public function getIterator()
```




##### Return type

```
\DirectoryIterator
```

---

### getPath

```
public function getPath()
```


##### Return type

```
mixed
```

---

### getRecursive

```
public function getRecursive()
```


##### Return type

```
mixed
```

---

### isExcluded

```
public function isExcluded($filePath)
```

##### Parameters

* **$filePath** 
  *no description*

##### Return type

```
mixed
```

---

### setExcludes

```
public function setExcludes($excludes)
```

##### Parameters

* **$excludes** 
  *no description*

##### Return type

```
mixed
```

---

### setPath

```
public function setPath($path)
```

##### Parameters

* **$path** 
  *no description*

##### Return type

```
mixed
```

---

### setRecursive

```
public function setRecursive($recursive)
```

##### Parameters

* **$recursive** 
  *no description*

##### Return type

```
mixed
```

---



## Attributes

### $excludes
```
protected $excludes
```



##### Type


```
mixed*
```

---

### $files
```
protected $files
```



##### Type


```
mixed*
```

---

### $path
```
protected $path
```



##### Type


```
mixed*
```

---

### $recursive
```
protected $recursive
```



##### Type


```
mixed*
```

---

