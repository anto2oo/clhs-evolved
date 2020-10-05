<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function PACKAGE-SHADOWING-SYMBOLS

### Syntax
`package-shadowing-symbols package => symbols`  


### Arguments and Values
- **package** : a package designator.   
- **symbols** : a list of symbols.   


### Description
Returns a list of symbols that have been declared as shadowing symbols in package by shadow or shadowing-import (or the equivalent defpackage options). All symbols on this list are present in package.



### Examples
```lisp 
(package-shadowing-symbols (make-package 'temp)) =>  ()
 (shadow 'cdr 'temp) =>  T
 (package-shadowing-symbols 'temp) =>  (TEMP::CDR)
 (intern "PILL" 'temp) =>  TEMP::PILL, NIL
 (shadowing-import 'pill 'temp) =>  T
 (package-shadowing-symbols 'temp) =>  (PILL TEMP::CDR)Side Effects: None.
```
