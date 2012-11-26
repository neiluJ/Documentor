# Class: [Documentor\Themes](../../../namespaces/Documentor/Themes.md) \ [Markdown](../../../classes/Documentor/Themes/Markdown.md) extends [Documentor\AbstractTheme](../../../classes/Documentor/AbstractTheme.md)


Summary: [Methods](#methods-summary) - 
## Methods Summary

* [__construct](#__construct)
* [generate](#generate)
* [generateClassDoc](#generateclassdoc)
* [generateDocIndex](#generatedocindex)
* [generateNamespaceDoc](#generatenamespacedoc)
* Herited from [Documentor\AbstractTheme](../../../classes/Documentor/AbstractTheme.md): [__construct](../../../classes/Documentor/AbstractTheme.md#__construct), [getFileExtension](../../../classes/Documentor/AbstractTheme.md#getfileextension), [setFileExtension](../../../classes/Documentor/AbstractTheme.md#setfileextension), [getIndexFilename](../../../classes/Documentor/AbstractTheme.md#getindexfilename), [setIndexFilename](../../../classes/Documentor/AbstractTheme.md#setindexfilename), [urlClass](../../../classes/Documentor/AbstractTheme.md#urlclass), [urlFunction](../../../classes/Documentor/AbstractTheme.md#urlfunction), [urlNamespace](../../../classes/Documentor/AbstractTheme.md#urlnamespace), [getTargetFilename](../../../classes/Documentor/AbstractTheme.md#gettargetfilename), [prepareTargetDirectory](../../../classes/Documentor/AbstractTheme.md#preparetargetdirectory), [prepareDocFile](../../../classes/Documentor/AbstractTheme.md#preparedocfile), [url](../../../classes/Documentor/AbstractTheme.md#url), 

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

### getIndexFilename

```
public function getIndexFilename()
```


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

### prepareTargetDirectory

```
protected function prepareTargetDirectory()
```


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


