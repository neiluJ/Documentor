# Class: [Documentor\Reflection](../../../namespaces/Documentor/Reflection.md) \ [ReflectionParameter](../../../classes/Documentor/Reflection/ReflectionParameter.md) 


Summary: [Methods](#methods-summary) - [Attributes](#attributes-summary)
## Methods Summary

* [__construct](#__construct)
* [allowsNull](#allowsnull)
* [getDeclaringClass](#getdeclaringclass)
* [getDeclaringFunction](#getdeclaringfunction)
* [getDefaultValue](#getdefaultvalue)
* [getName](#getname)
* [getPosition](#getposition)
* [isArray](#isarray)
* [isOptional](#isoptional)
* [isPassedByReference](#ispassedbyreference)
* [setDeclaringClass](#setdeclaringclass)
* [setDeclaringFunction](#setdeclaringfunction)
* [setDefaultValue](#setdefaultvalue)
* [setName](#setname)
* [setNullable](#setnullable)
* [setOptional](#setoptional)
* [setPosition](#setposition)
* [setReference](#setreference)
* [setType](#settype)


## Attributes Summary

* protected  [$declaringClass](#declaringclass)
* protected  [$declaringFunction](#declaringfunction)
* protected  [$defaultValue](#defaultvalue)
* protected  [$name](#name)
* protected  [$nullable](#nullable)
* protected  [$optional](#optional)
* protected  [$position](#position)
* protected  [$reference](#reference)
* protected  [$type](#type)

---

## Methods

### __construct

```
public function __construct($name, $nullable = false, $type = null,
        $defaultValue = null, $reference = false
    )
```

##### Parameters

* **$name** 
  *no description*
* **$nullable** *(optional)*
  *no description*
* **$type** *(optional)*
  *no description*
* **$defaultValue** *(optional)*
  *no description*
* **$reference** *(optional)*
  *no description*

##### Return type

```
mixed
```

---

### allowsNull

```
public function allowsNull()
```


##### Return type

```
mixed
```

---

### getDeclaringClass

```
public function getDeclaringClass()
```


##### Return type

```
mixed
```

---

### getDeclaringFunction

```
public function getDeclaringFunction()
```


##### Return type

```
mixed
```

---

### getDefaultValue

```
public function getDefaultValue()
```


##### Return type

```
mixed
```

---

### getName

```
public function getName()
```


##### Return type

```
mixed
```

---

### getPosition

```
public function getPosition()
```


##### Return type

```
mixed
```

---

### isArray

```
public function isArray()
```


##### Return type

```
mixed
```

---

### isOptional

```
public function isOptional()
```


##### Return type

```
mixed
```

---

### isPassedByReference

```
public function isPassedByReference()
```


##### Return type

```
mixed
```

---

### setDeclaringClass

```
public function setDeclaringClass(ReflectionClass $declaringClass)
```

##### Parameters

* **$declaringClass** 
  *no description*

##### Return type

```
mixed
```

---

### setDeclaringFunction

```
public function setDeclaringFunction(ReflectionFunction $declaringFunction)
```

##### Parameters

* **$declaringFunction** 
  *no description*

##### Return type

```
mixed
```

---

### setDefaultValue

```
public function setDefaultValue($defaultValue)
```

##### Parameters

* **$defaultValue** 
  *no description*

##### Return type

```
mixed
```

---

### setName

```
public function setName($name)
```

##### Parameters

* **$name** 
  *no description*

##### Return type

```
mixed
```

---

### setNullable

```
public function setNullable($allowsNull)
```

##### Parameters

* **$allowsNull** 
  *no description*

##### Return type

```
mixed
```

---

### setOptional

```
public function setOptional($optional)
```

##### Parameters

* **$optional** 
  *no description*

##### Return type

```
mixed
```

---

### setPosition

```
public function setPosition($position)
```

##### Parameters

* **$position** 
  *no description*

##### Return type

```
mixed
```

---

### setReference

```
public function setReference($reference)
```

##### Parameters

* **$reference** 
  *no description*

##### Return type

```
mixed
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
mixed
```

---



## Attributes

### $declaringClass
```
protected $declaringClass
```



##### Type


```
mixed*
```

---

### $declaringFunction
```
protected $declaringFunction
```



##### Type


```
mixed*
```

---

### $defaultValue
```
protected $defaultValue
```



##### Type


```
mixed*
```

---

### $name
```
protected $name
```



##### Type


```
mixed*
```

---

### $nullable
```
protected $nullable
```



##### Type


```
mixed*
```

---

### $optional
```
protected $optional
```



##### Type


```
mixed*
```

---

### $position
```
protected $position
```



##### Type


```
mixed*
```

---

### $reference
```
protected $reference
```



##### Type


```
mixed*
```

---

### $type
```
protected $type
```



##### Type


```
mixed*
```

---

