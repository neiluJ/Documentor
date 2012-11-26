# Class: [Documentor\Parsers](../../../namespaces/Documentor/Parsers.md) \ [ClassParser](../../../classes/Documentor/Parsers/ClassParser.md) extends [Documentor\AbstractParser](../../../classes/Documentor/AbstractParser.md)


Summary: [Methods](#methods-summary) - [Attributes](#attributes-summary)
## Methods Summary

* [__construct](#__construct)
* [appendData](#appenddata)
* [getTriggerToken](#gettriggertoken)
* [parse](#parse)
* [setTriggerToken](#settriggertoken)
* Herited from [Documentor\AbstractParser](../../../classes/Documentor/AbstractParser.md): [__construct](../../../classes/Documentor/AbstractParser.md#__construct), [addParser](../../../classes/Documentor/AbstractParser.md#addparser), [addParsers](../../../classes/Documentor/AbstractParser.md#addparsers), [parse](../../../classes/Documentor/AbstractParser.md#parse), [getFilePath](../../../classes/Documentor/AbstractParser.md#getfilepath), [setFilePath](../../../classes/Documentor/AbstractParser.md#setfilepath), [getTokens](../../../classes/Documentor/AbstractParser.md#gettokens), [getResults](../../../classes/Documentor/AbstractParser.md#getresults), 

## Attributes Summary

* protected  [$triggerToken](#triggertoken)

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

### parse

```
public function parse()
```




##### Return type

```
array
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

### getTokens

```
protected function getTokens()
```




##### Return type

```
array
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



## Attributes

### $triggerToken
```
protected $triggerToken
```



##### Type


```
mixed*
```

---

