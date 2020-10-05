<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Accessor READTABLE-CASE

### Syntax
`readtable-case readtable => mode`  
`(setf (readtable-case readtable) mode)`  


### Arguments and Values
- **readtable** : a readtable.   
- **mode** : a case sensitivity mode.   


### Description
Accesses the readtable case of readtable, which affects the way in which the Lisp Reader reads symbols and the way in which the Lisp Printer writes symbols.



### Examples
```lisp 
See Section 23.1.2.1 (Examples of Effect of Readtable Case on the Lisp Reader) and Section 22.1.3.3.2.1 (Examples of Effect of Readtable Case on the Lisp Printer).
```
