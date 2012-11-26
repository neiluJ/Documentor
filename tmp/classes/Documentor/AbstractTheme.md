# Class: [Documentor](../../namespaces/Documentor.md) \ [AbstractTheme](../../classes/Documentor/AbstractTheme.md) 



Summary: [Methods](#methods-summary) - [Attributes](#attributes-summary)
## Methods Summary

* [__construct](#__construct)
* [getFileExtension](#getfileextension)
* [getIndexFilename](#getindexfilename)
* [getTargetFilename](#gettargetfilename)
* [prepareDocFile](#preparedocfile)
* [prepareTargetDirectory](#preparetargetdirectory)
* [setFileExtension](#setfileextension)
* [setIndexFilename](#setindexfilename)
* [url](#url)
* [urlClass](#urlclass)
* [urlFunction](#urlfunction)
* [urlNamespace](#urlnamespace)


## Attributes Summary

* protected  [$fileExtension](#fileextension)
* protected  [$indexFilename](#indexfilename)
* protected  [$project](#project)
* protected  [$targetDirectory](#targetdirectory)

---

## Methods

### __construct

```
public function __construct(Project $project, $targetDirectory)
```

Constructor


##### Parameters

* **$project** 
  *no description*
* **$targetDirectory** 
  *no description*

##### Return type

```
void
```

---

### getFileExtension

```
public function getFileExtension()
```


##### Return type

```
mixed
```

---

### getIndexFilename

```
public function getIndexFilename()
```


##### Return type

```
mixed
```

---

### getTargetFilename

```
protected function getTargetFilename($thing, $prefix = null)
```

##### Parameters

* **$thing** 
  *no description*
* **$prefix** *(optional)*
  *no description*

##### Return type

```
mixed
```

---

### prepareDocFile

```
protected function prepareDocFile($filePath)
```

##### Parameters

* **$filePath** 
  *no description*

##### Return type

```
mixed
```

---

### prepareTargetDirectory

```
protected function prepareTargetDirectory()
```


##### Return type

```
mixed
```

---

### setFileExtension

```
public function setFileExtension($fileExtension)
```

##### Parameters

* **$fileExtension** 
  *no description*

##### Return type

```
mixed
```

---

### setIndexFilename

```
public function setIndexFilename($indexFilename)
```

##### Parameters

* **$indexFilename** 
  *no description*

##### Return type

```
mixed
```

---

### url

```
public function url($componentName, $type, $originName = null)
```




##### Parameters

* **$componentName** 
  
* **$type** 
  
* **$originName** *(optional)*
  *no description*

##### Return type

```
string
```

---

### urlClass

```
public function urlClass($className)
```

##### Parameters

* **$className** 
  *no description*

##### Return type

```
mixed
```

---

### urlFunction

```
public function urlFunction($funcName)
```

##### Parameters

* **$funcName** 
  *no description*

##### Return type

```
mixed
```

---

### urlNamespace

```
public function urlNamespace($namespaceName)
```

##### Parameters

* **$namespaceName** 
  *no description*

##### Return type

```
mixed
```

---



## Attributes

### $fileExtension
```
protected $fileExtension
```



##### Type


```
mixed*
```

---

### $indexFilename
```
protected $indexFilename
```



##### Type


```
mixed*
```

---

### $project
```
protected $project
```





##### Type


```
Project
```

---

### $targetDirectory
```
protected $targetDirectory
```



##### Type


```
mixed*
```

---

