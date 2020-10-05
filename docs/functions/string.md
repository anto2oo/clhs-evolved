<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function STRING

### Syntax
`string x => string`  


### Arguments and Values
- **x** : a string, a symbol, or a character.   
- **string** : a string.   


### Description
Returns a string described by x; specifically:



### Examples
```lisp 
(string "already a string") =>  "already a string"
 (string 'elm) =>  "ELM"
 (string #\c) =>  "c"
```
