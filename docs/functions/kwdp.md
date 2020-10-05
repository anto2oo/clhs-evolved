<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function KEYWORDP

### Syntax
`keywordp object => generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is a keyword[1]; otherwise, returns false.



### Examples
```lisp 
(keywordp 'elephant) =>  false
 (keywordp 12) =>  false
 (keywordp :test) =>  true
 (keywordp ':test) =>  true
 (keywordp nil) =>  false
 (keywordp :nil) =>  true
 (keywordp '(:test)) =>  false
 (keywordp "hello") =>  false
 (keywordp ":hello") =>  false
 (keywordp '&optional) =>  falseSide Effects: None.
```
