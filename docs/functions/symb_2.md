<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function SYMBOL-NAME

### Syntax
`symbol-name symbol => name`  


### Arguments and Values
- **symbol** : a symbol.   
- **name** : a string.   


### Description
symbol-name returns the name of symbol.  The consequences are undefined if name is ever modified.



### Examples
```lisp 
(symbol-name 'temp) =>  "TEMP" 
 (symbol-name :start) =>  "START"
 (symbol-name (gensym)) =>  "G1234" ;for exampleSide Effects: None.
```
