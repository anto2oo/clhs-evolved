<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro MULTIPLE-VALUE-SETQ

### Syntax
`multiple-value-setq vars form => result`  


### Arguments and Values
- **vars** : a list of symbols that are either variable names or names of symbol macros.   
- **form** : a form.   
- **result** : The primary value returned by the form.   


### Description
multiple-value-setq assigns values to vars.  
The form is evaluated, and each var is assigned to the corresponding value returned by that form. If there are more vars than values returned, nil is assigned to the extra vars. If there are more values than vars, the extra values are discarded.  
 If any var is the name of a symbol macro, then it is assigned as if by setf. Specifically,  
 (multiple-value-setq (symbol1 ... symboln) value-producing-form)  
 (values (setf (values symbol1 ... symboln) value-producing-form))



### Examples
```lisp 
(multiple-value-setq (quotient remainder) (truncate 3.2 2)) =>  1
 quotient =>  1
 remainder =>  1.2
 (multiple-value-setq (a b c) (values 1 2)) =>  1
 a =>  1
 b =>  2
 c =>  NIL
 (multiple-value-setq (a b) (values 4 5 6)) =>  4
 a =>  4
 b =>  5Side Effects: None.
```
