<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function COMPILED-FUNCTION-P

### Syntax
`compiled-function-p object => generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is of type compiled-function; otherwise, returns false.



### Examples
```lisp 
(defun f (x) x) =>  F
 (compiled-function-p #'f)
=>  false
OR=>  true
 (compiled-function-p 'f) =>  false
 (compile 'f) =>  F
 (compiled-function-p #'f) =>  true
 (compiled-function-p 'f) =>  false
 (compiled-function-p (compile nil '(lambda (x) x)))
=>  true
 (compiled-function-p #'(lambda (x) x))
=>  false
OR=>  true
 (compiled-function-p '(lambda (x) x)) =>  falseSide Effects: None.
```
