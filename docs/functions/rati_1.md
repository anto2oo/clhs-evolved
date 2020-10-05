<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function RATIONALP

### Syntax
`rationalp object => generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is of type rational; otherwise, returns false.



### Examples
```lisp 
(rationalp 12) =>  true
 (rationalp 6/5) =>  true
 (rationalp 1.212) =>  falseSide Effects: None.
```
