# Class: [Documentor](../../namespaces/Documentor.md) \ [ThemeResource](../../classes/Documentor/ThemeResource.md) 


Summary: [Constants](#constants) - [Methods](#methods-summary) - [Attributes](#attributes-summary)
## Constants

* ```TYPE_NAMESPACE```
* ```TYPE_CLASS```
* ```TYPE_FUNCTION```


## Methods Summary

* [__construct](#__construct)
* [__get](#__get)
* [__isset](#__isset)
* [__set](#__set)
* [__unset](#__unset)
* [delete](#delete)
* [execute](#execute)
* [get](#get)
* [getProject](#getproject)
* [getReflector](#getreflector)
* [getResolver](#getresolver)
* [getResource](#getresource)
* [has](#has)
* [hasReflector](#hasreflector)
* [isType](#istype)
* [set](#set)
* [setMulti](#setmulti)
* [setProject](#setproject)
* [setReflector](#setreflector)
* [setResolver](#setresolver)
* [setResource](#setresource)
* [setType](#settype)
* [url](#url)


## Attributes Summary

* protected  [$options](#options)
* protected  [$project](#project)
* protected  [$reflector](#reflector)
* protected  [$resolver](#resolver)
* protected  [$resource](#resource)
* protected  [$type](#type)

---

## Methods

### __construct

```
public function __construct($resource, array $options = array())
```




##### Parameters

* **$resource** 
  *no description*
* **$options** *(optional)*
  *no description*

##### Return type

```
void
```

---

### __get

```
public function __get($name)
```

##### Parameters

* **$name** 
  *no description*

##### Return type

```
mixed
```

---

### __isset

```
public function __isset($name)
```

##### Parameters

* **$name** 
  *no description*

##### Return type

```
mixed
```

---

### __set

```
public function __set($name, $value)
```

##### Parameters

* **$name** 
  *no description*
* **$value** 
  *no description*

##### Return type

```
mixed
```

---

### __unset

```
public function __unset($name)
```

##### Parameters

* **$name** 
  *no description*

##### Return type

```
mixed
```

---

### delete

```
public function delete($key)
```




##### Parameters

* **$key** 
  *no description*

##### Return type

```
Object
```

---

### execute

```
public function execute()
```




##### Return type

```
string
```

---

### get

```
public function get($key, $default = null)
```




##### Parameters

* **$key** 
  
* **$default** *(optional)*
  *no description*

##### Return type

```
mixed
```

---

### getProject

```
public function getProject()
```




##### Return type

```
Project
```

---

### getReflector

```
public function getReflector()
```




##### Return type

```
Reflector
```

---

### getResolver

```
public function getResolver()
```


##### Return type

```
mixed
```

---

### getResource

```
public function getResource()
```




##### Return type

```
string
```

---

### has

```
public function has($key)
```




##### Parameters

* **$key** 
  *no description*

##### Return type

```
boolean
```

---

### hasReflector

```
public function hasReflector()
```




##### Return type

```
boolean
```

---

### isType

```
public function isType($type)
```




##### Parameters

* **$type** 
  *no description*

##### Return type

```
boolean
```

---

### set

```
public function set($key, $value)
```




##### Parameters

* **$key** 
  
* **$value** 
  *no description*

##### Return type

```
Object
```

---

### setMulti

```
public function setMulti(array $values)
```

Defines multiples values



##### Parameters

* **$values** 
  *no description*

##### Return type

```
Object
```

---

### setProject

```
public function setProject(Project $project)
```




##### Parameters

* **$project** 
  *no description*

##### Return type

```
void
```

---

### setReflector

```
public function setReflector(Reflector $reflector)
```




##### Parameters

* **$reflector** 
  *no description*

##### Return type

```
void
```

---

### setResolver

```
public function setResolver($resolver)
```

##### Parameters

* **$resolver** 
  *no description*

##### Return type

```
mixed
```

---

### setResource

```
public function setResource($resource)
```




##### Parameters

* **$resource** 
  *no description*

##### Return type

```
void
```

---

### setType

```
public function setType($type)
```




##### Parameters

* **$type** 
  *no description*

##### Return type

```
void
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



## Attributes

### $options
```
protected $options
```




##### Type


```
array
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

### $reflector
```
protected $reflector
```




##### Type


```
Reflector
```

---

### $resolver
```
protected $resolver
```




##### Type


```
mixed
```

---

### $resource
```
protected $resource
```

Path to resource file




##### Type


```
string
```

---

### $type
```
protected $type
```




##### Type


```
string
```

---

