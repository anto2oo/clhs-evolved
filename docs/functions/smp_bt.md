<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function SIMPLE-BIT-VECTOR-P

### Syntax
`simple-bit-vector-p object => generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is of type simple-bit-vector; otherwise, returns false.



### Examples
```lisp 
(simple-bit-vector-p (make-array 6)) =>  false
 (simple-bit-vector-p #*) =>  trueSide Effects: None.
```
