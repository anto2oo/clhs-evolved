<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function BOUNDP

### Syntax
`boundp symbol => generalized-boolean`  


### Arguments and Values
- **symbol** : a symbol.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if symbol is bound; otherwise, returns false.



### Examples
```lisp 
(setq x 1) =>  1
 (boundp 'x) =>  true
 (makunbound 'x) =>  X
 (boundp 'x) =>  false
 (let ((x 2)) (boundp 'x)) =>  false
 (let ((x 2)) (declare (special x)) (boundp 'x)) =>  true
```
