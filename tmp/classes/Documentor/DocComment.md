# Class: [Documentor](../../namespaces/Documentor.md) \ [DocComment](../../classes/Documentor/DocComment.md) 

This class is used to parse and extract informations from comment blocks


Summary: [Constants](#constants) - [Methods](#methods-summary) - [Attributes](#attributes-summary)
## Constants

* ```GENERIC_TAG_KEY```


## Methods Summary

* [__construct](#__construct)
* [__toString](#__tostring)
* [factory](#factory)
* [fixHTML](#fixhtml)
* [getComment](#getcomment)
* [getFirstTag](#getfirsttag)
* [getTagClassName](#gettagclassname)
* [getTags](#gettags)
* [setTagClassName](#settagclassname)


## Attributes Summary

* public static [$// 'author'](#// 'author')
* protected  [$block](#block)
* protected  [$comment](#comment)
* protected  [$endLine](#endline)
* protected  [$startLine](#startline)
* public static [$tagsClasses](#tagsclasses)

---

## Methods

### __construct

```
public static function __construct($comment, $startLine = 0, $endLine = 0)
```

Constructor

Initialize a comment-block



##### Parameters

* **$comment** 
  *no description*
* **$startLine** *(optional)*
  *no description*
* **$endLine** *(optional)*
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

Returns the raw comment block



##### Return type

```
string
```

---

### factory

```
public static function factory($block, $startLine = 0, $endLine = 0)
```




##### Parameters

* **$block** 
  
* **$startLine** *(optional)*
  
* **$endLine** *(optional)*
  *no description*

##### Return type

```
DocComment
```

---

### fixHTML

```
protected static function fixHTML($text)
```




##### Parameters

* **$text** 
  *no description*

##### Return type

```
string
```

---

### getComment

```
public function getComment()
```

Returns the comment string



##### Return type

```
string
```

---

### getFirstTag

```
public function getFirstTag($tagName)
```




##### Parameters

* **$tagName** 
  *no description*

##### Return type

```
Tag
```

---

### getTagClassName

```
public static function getTagClassName($tagName)
```




##### Parameters

* **$tagName** 
  *no description*

##### Return type

```
string
```

---

### getTags

```
public function getTags($name)
```




##### Parameters

* **$name** 
  *no description*

##### Return type

```
array
```

---

### setTagClassName

```
public static function setTagClassName($tagName, $className)
```




##### Parameters

* **$tagName** 
  
* **$className** 
  *no description*

##### Return type

```
void
```

---



## Attributes

### $// 'author'
```
public static $// 'author'
```



##### Type


```
mixed*
```

---

### $block
```
protected $block
```



##### Type


```
mixed*
```

---

### $comment
```
protected $comment
```



##### Type


```
mixed*
```

---

### $endLine
```
protected $endLine
```



##### Type


```
mixed*
```

---

### $startLine
```
protected $startLine
```



##### Type


```
mixed*
```

---

### $tagsClasses
```
public static $tagsClasses
```




##### Type


```
array
```

---

