<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function COMPLEXP

### Syntax
`complexp object => generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is of type complex; otherwise, returns false.



### Examples
```lisp 
(complexp 1.2d2) =>  false
 (complexp #c(5/3 7.2)) =>  trueSide Effects: None.
```
