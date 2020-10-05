<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function INTEGERP

### Syntax
`integerp object => generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is of type integer; otherwise, returns false.



### Examples
```lisp 
(integerp 1) =>  true
 (integerp (expt 2 130)) =>  true
 (integerp 6/5) =>  false
 (integerp nil) =>  falseSide Effects: None.
```
