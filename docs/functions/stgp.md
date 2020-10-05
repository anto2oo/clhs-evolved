<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function STRINGP

### Syntax
`stringp object => generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is of type string; otherwise, returns false.



### Examples
```lisp 
(stringp "aaaaaa") =>  true
 (stringp #\a) =>  false
```
