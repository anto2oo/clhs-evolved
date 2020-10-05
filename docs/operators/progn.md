<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Special Operator PROGN

### Syntax
`progn form* => result*`  


### Arguments and Values
- **forms** : an implicit progn.   
- **results** : the values of the forms.   


### Description
progn evaluates forms, in the order in which they are given.  
The values of each form but the last are discarded.  
If progn appears as a top level form, then all forms within that progn are considered by the compiler to be top level forms.



### Examples
```lisp 
(progn) =>  NIL
 (progn 1 2 3) =>  3
 (progn (values 1 2 3)) =>  1, 2, 3
 (setq a 1) =>  1
 (if a
      (progn (setq a nil) 'here)
      (progn (setq a t) 'there)) =>  HERE
 a =>  NIL
```
