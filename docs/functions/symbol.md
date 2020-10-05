<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function SYMBOLP

### Syntax
`symbolp object => generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is of type symbol; otherwise, returns false.



### Examples
```lisp 
(symbolp 'elephant) =>  true
 (symbolp 12) =>  false
 (symbolp nil) =>  true
 (symbolp '()) =>  true
 (symbolp :test) =>  true
 (symbolp "hello") =>  falseSide Effects: None.
```
