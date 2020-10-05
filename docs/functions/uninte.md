<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function UNINTERN

### Syntax
`unintern symbol &optional package => generalized-boolean`  


### Arguments and Values
- **symbol** : a symbol.   
- **package** : a package designator.  The default is the current package.   
- **generalized-boolean** : a generalized boolean.   


### Description
unintern removes symbol from package. If symbol is present in package, it is removed from package and also from package's shadowing symbols list if it is present there. If package is the home package for symbol, symbol is made to have no home package. Symbol may continue to be accessible in package by inheritance.  
Use of unintern can result in a symbol that has no recorded home package, but that in fact is accessible in some package. Common Lisp does not check for this pathological case, and such symbols are always printed preceded by #:.  
unintern returns true if it removes symbol, and nil otherwise.



### Examples
```lisp 
(in-package "COMMON-LISP-USER") =>  #<PACKAGE "COMMON-LISP-USER">
 (setq temps-unpack (intern "UNPACK" (make-package 'temp))) =>  TEMP::UNPACK 
 (unintern temps-unpack 'temp) =>  T
 (find-symbol "UNPACK" 'temp) =>  NIL, NIL 
 temps-unpack =>  #:UNPACKSide Effects:
unintern changes the state of the package system in such a way that the consistency rules do not hold across the change.
```
