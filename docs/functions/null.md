<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function NULL

### Syntax
`null object => boolean`  


### Arguments and Values
- **object** : an object.   
- **boolean** : a boolean.   


### Description
Returns t if object is the empty list; otherwise, returns nil.



### Examples
```lisp 
(null '()) =>  T
 (null nil) =>  T
 (null t) =>  NIL
 (null 1) =>  NILSide Effects: None.
```
