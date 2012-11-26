# Class: [Documentor](../../namespaces/Documentor.md) \ [Resolver](../../classes/Documentor/Resolver.md) 

Documentation project


Summary: [Methods](#methods-summary) - [Attributes](#attributes-summary)
## Methods Summary

* [__construct](#__construct)
* [getParentMethods](#getparentmethods)
* [getProject](#getproject)
* [getReflector](#getreflector)
* [heritedMethods](#heritedmethods)
* [isIndexed](#isindexed)
* [resolveClassName](#resolveclassname)
* [setProject](#setproject)
* [setReflector](#setreflector)


## Attributes Summary

* protected  [$project](#project)
* protected  [$reflector](#reflector)

---

## Methods

### __construct

```
public function __construct(Project $project, Reflector $reflector = null)
```




##### Parameters

* **$project** 
  
* **$reflector** *(optional)*
  *no description*

##### Return type

```
void
```

---

### getParentMethods

```
protected function getParentMethods($className, array &$methods = array())
```

##### Parameters

* **$className** 
  *no description*
* **$methods** *(optional)*
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

### heritedMethods

```
public function heritedMethods()
```




##### Return type

```
array
```

---

### isIndexed

```
public function isIndexed($className)
```




##### Parameters

* **$className** 
  *no description*

##### Return type

```
boolean
```

---

### resolveClassName

```
public function resolveClassName($className)
```

Resolves a short-classname into its full name (namespace+classname)



##### Parameters

* **$className** 
  *no description*

##### Return type

```
string
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



## Attributes

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

