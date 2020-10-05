<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function FLOATP

### Syntax
`floatp object`  
`generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is of type float; otherwise, returns false.



### Examples
```lisp 
(floatp 1.2d2) =>  true
 (floatp 1.212) =>  true
 (floatp 1.2s2) =>  true
 (floatp (expt 2 130)) =>  falseSide Effects: None.
```
