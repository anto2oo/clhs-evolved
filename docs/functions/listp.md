<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function LISTP

### Syntax
`listp object => generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is of type list; otherwise, returns false.



### Examples
```lisp 
(listp nil) =>  true
 (listp (cons 1 2)) =>  true
 (listp (make-array 6)) =>  false
 (listp t) =>  falseSide Effects: None.
```
