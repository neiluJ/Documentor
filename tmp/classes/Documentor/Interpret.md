# Class: [Documentor](../../namespaces/Documentor.md) \ [Interpret](../../classes/Documentor/Interpret.md) 



Summary: [Methods](#methods-summary) - [Attributes](#attributes-summary)
## Methods Summary

* [__construct](#__construct)
* [getClass](#getclass)
* [getClasses](#getclasses)
* [getClassesNames](#getclassesnames)
* [getFunction](#getfunction)
* [getFunctions](#getfunctions)
* [getFunctionsNames](#getfunctionsnames)
* [getItemFullName](#getitemfullname)
* [getNamespace](#getnamespace)
* [getParser](#getparser)
* [hasClass](#hasclass)
* [hasFunction](#hasfunction)
* [hasNamespace](#hasnamespace)


## Attributes Summary

* protected  [$parser](#parser)

---

## Methods

### __construct

```
public function __construct($filePath)
```




##### Parameters

* **$filePath** 
  *no description*

##### Return type

```
void
```

---

### getClass

```
public function getClass($className)
```




##### Parameters

* **$className** 
  *no description*

##### Return type

```
ReflectionClass
```

---

### getClasses

```
public function getClasses()
```




##### Return type

```
array
```

---

### getClassesNames

```
public function getClassesNames()
```


##### Return type

```
mixed
```

---

### getFunction

```
public function getFunction($functionName)
```




##### Parameters

* **$functionName** 
  *no description*

##### Return type

```
ReflectionFunction
```

---

### getFunctions

```
public function getFunctions()
```




##### Return type

```
array
```

---

### getFunctionsNames

```
public function getFunctionsNames()
```


##### Return type

```
mixed
```

---

### getItemFullName

```
protected function getItemFullName($name)
```




##### Parameters

* **$name** 
  *no description*

##### Return type

```
string
```

---

### getNamespace

```
public function getNamespace()
```




##### Return type

```
string
```

---

### getParser

```
public function getParser()
```




##### Return type

```
PhpFileParser
```

---

### hasClass

```
public function hasClass($className)
```




##### Parameters

* **$className** 
  *no description*

##### Return type

```
boolean
```

---

### hasFunction

```
public function hasFunction($functionName)
```




##### Parameters

* **$functionName** 
  *no description*

##### Return type

```
boolean
```

---

### hasNamespace

```
public function hasNamespace()
```



##### Return type

```
boolean
```

---



## Attributes

### $parser
```
protected $parser
```




##### Type


```
PhpFileParser
```

---

