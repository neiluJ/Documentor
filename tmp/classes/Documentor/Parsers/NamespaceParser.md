# Class: [Documentor\Parsers](../../../namespaces/Documentor/Parsers.md) \ [NamespaceParser](../../../classes/Documentor/Parsers/NamespaceParser.md) extends [Documentor\AbstractParser](../../../classes/Documentor/AbstractParser.md)


Summary: [Constants](#constants) - [Methods](#methods-summary) - 
## Constants

* ```DEFAULT_NAMESPACE```


## Methods Summary

* [parse](#parse)
* Herited from [Documentor\AbstractParser](../../../classes/Documentor/AbstractParser.md): [__construct](../../../classes/Documentor/AbstractParser.md#__construct), [addParser](../../../classes/Documentor/AbstractParser.md#addparser), [addParsers](../../../classes/Documentor/AbstractParser.md#addparsers), [parse](../../../classes/Documentor/AbstractParser.md#parse), [getFilePath](../../../classes/Documentor/AbstractParser.md#getfilepath), [setFilePath](../../../classes/Documentor/AbstractParser.md#setfilepath), [getTokens](../../../classes/Documentor/AbstractParser.md#gettokens), [getResults](../../../classes/Documentor/AbstractParser.md#getresults), 

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


