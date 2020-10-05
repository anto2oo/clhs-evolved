<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function MAKUNBOUND

### Syntax
`makunbound symbol => symbol`  


### Arguments and Values
- **symbol** : a symbol   


### Description
Makes the symbol be unbound, regardless of whether it was previously bound.



### Examples
```lisp 
(setf (symbol-value 'a) 1)
 (boundp 'a) =>  true
 a =>  1
 (makunbound 'a) =>  A
 (boundp 'a) =>  falseSide Effects:
The value cell of symbol is modified.
```
