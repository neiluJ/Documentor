# Class: [Documentor](../../namespaces/Documentor.md) \ [AbstractParser](../../classes/Documentor/AbstractParser.md) 



Summary: [Methods](#methods-summary) - [Attributes](#attributes-summary)
## Methods Summary

* [__construct](#__construct)
* [addParser](#addparser)
* [addParsers](#addparsers)
* [getFilePath](#getfilepath)
* [getResults](#getresults)
* [getTokens](#gettokens)
* [parse](#parse)
* [setFilePath](#setfilepath)


## Attributes Summary

* protected  [$filePath](#filepath)
* protected  [$parsers](#parsers)
* protected  [$results](#results)
* protected  [$tokens](#tokens)

---

## Methods

### __construct

```
public function __construct($filePath = null)
```

##### Parameters

* **$filePath** *(optional)*
  *no description*

##### Return type

```
mixed
```

---

### addParser

```
public function addParser($key, Parser $parser)
```




##### Parameters

* **$key** 
  *no description*
* **$parser** 
  *no description*

##### Return type

```
Parser
```

---

### addParsers

```
public function addParsers(array $parsers)
```




##### Parameters

* **$parsers** 
  *no description*

##### Return type

```
Parser
```

---

### getFilePath

```
public function getFilePath()
```




##### Return type

```
string
```

---

### getResults

```
public function getResults()
```




##### Return type

```
array
```

---

### getTokens

```
protected function getTokens()
```




##### Return type

```
array
```

---

### parse

```
public function parse()
```




##### Return type

```
array
```

---

### setFilePath

```
public function setFilePath($filePath)
```




##### Parameters

* **$filePath** 
  *no description*

##### Return type

```
Parser
```

---



## Attributes

### $filePath
```
protected $filePath
```




##### Type


```
string
```

---

### $parsers
```
protected $parsers
```




##### Type


```
array
```

---

### $results
```
protected $results
```




##### Type


```
array
```

---

### $tokens
```
protected $tokens
```




##### Type


```
array
```

---

