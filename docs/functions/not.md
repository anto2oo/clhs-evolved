<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function NOT

### Syntax
`not x => boolean`  


### Arguments and Values
- **x** : a generalized boolean (i.e., any object).   
- **boolean** : a boolean.   


### Description
Returns t if x is false; otherwise, returns nil.



### Examples
```lisp 
(not nil) =>  T
 (not '()) =>  T
 (not (integerp 'sss)) =>  T
 (not (integerp 1)) =>  NIL
 (not 3.7) =>  NIL
 (not 'apple) =>  NILSide Effects: None.
```
