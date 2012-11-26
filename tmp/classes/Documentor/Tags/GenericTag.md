# Class: [Documentor\Tags](../../../namespaces/Documentor/Tags.md) \ [GenericTag](../../../classes/Documentor/Tags/GenericTag.md) 

This class represent a generic documentation tag
like @author, @version ...

It can also be herited by other tag classes


Summary: [Methods](#methods-summary) - [Attributes](#attributes-summary)
## Methods Summary

* [__construct](#__construct)
* [__toString](#__tostring)
* [getName](#getname)
* [getText](#gettext)
* [setName](#setname)
* [setText](#settext)


## Attributes Summary

* protected  [$name](#name)
* protected  [$text](#text)

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

### getText

```
public function getText()
```




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

### $name
```
protected $name
```

Tag name




##### Type


```
string
```

---

### $text
```
protected $text
```

Line of content for this tag




##### Type


```
string
```

---

