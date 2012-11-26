# Class: [Documentor\Tags](../../../namespaces/Documentor/Tags.md) \ [ParameterTag](../../../classes/Documentor/Tags/ParameterTag.md) extends [Documentor\Tags\GenericTag](../../../classes/Documentor/Tags/GenericTag.md)

This class represent a generic documentation tag
like @author, @version ...

It can also be herited by other tag classes


Summary: [Methods](#methods-summary) - [Attributes](#attributes-summary)
## Methods Summary

* [__construct](#__construct)
* [getDescription](#getdescription)
* [getParamName](#getparamname)
* [getType](#gettype)
* [setDescription](#setdescription)
* [setParamName](#setparamname)
* [setType](#settype)
* Herited from [Documentor\Tags\GenericTag](../../../classes/Documentor/Tags/GenericTag.md): [__construct](../../../classes/Documentor/Tags/GenericTag.md#__construct), [getName](../../../classes/Documentor/Tags/GenericTag.md#getname), [setName](../../../classes/Documentor/Tags/GenericTag.md#setname), [__toString](../../../classes/Documentor/Tags/GenericTag.md#__tostring), [getText](../../../classes/Documentor/Tags/GenericTag.md#gettext), [setText](../../../classes/Documentor/Tags/GenericTag.md#settext), 

## Attributes Summary

* protected  [$description](#description)
* protected  [$paramName](#paramname)
* protected  [$type](#type)

---

## Methods

### __construct

```
public function __construct($name, $text = null)
```

Create a new generic tag



##### Parameters

* **$name** 
  Content
* **$text** *(optional)*
  *no description*

##### Return type

```
void
```

---

### getName

```
public function getName()
```

Returns this tag name



##### Return type

```
string
```

---

### setName

```
public function setName($tagName)
```




##### Parameters

* **$tagName** 
  *no description*

##### Return type

```
void
```

---

### __toString

```
public function __toString()
```

Return the complete comment line of this tag



##### Return type

```
string
```

---

### getText

```
public function getText()
```




##### Return type

```
string
```

---

### setText

```
public function setText($text)
```




##### Parameters

* **$text** 
  *no description*

##### Return type

```
void
```

---



## Attributes

### $description
```
protected $description
```



##### Type


```
mixed*
```

---

### $paramName
```
protected $paramName
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

