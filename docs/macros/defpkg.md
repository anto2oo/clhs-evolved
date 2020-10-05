<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro DEFPACKAGE

### Syntax
`defpackage defined-package-name [[option]] => package`  
`option::= (:nicknames nickname*)* |`  
`(:documentation string) |`  
`(:use package-name*)* |`  
`(:shadow {symbol-name}*)* |`  
`(:shadowing-import-from package-name {symbol-name}*)* |`  
`(:import-from package-name {symbol-name}*)* |`  
`(:export {symbol-name}*)* |`  
`(:intern {symbol-name}*)* |`  
`(:size integer)`  


### Arguments and Values
- **defined-package-name** : a string designator.   
- **package-name** : a package designator.   
- **nickname** : a string designator.   
- **symbol-name** : a string designator.   
- **package** : the package named package-name.   


### Description
defpackage creates a package as specified and returns the package.  
If defined-package-name already refers to an existing package, the name-to-package mapping for that name is not changed. If the new definition is at variance with the current state of that package, the consequences are undefined; an implementation might choose to modify the existing package to reflect the new definition. If defined-package-name is a symbol, its name is used.  
The standard options are described below.  
The order in which the options appear in a defpackage form is irrelevant. The order in which they are executed is as follows:  
 If a defpackage form appears as a top level form, all of the actions normally performed by this macro at load time must also be performed at compile time.



### Examples
```lisp 
(defpackage "MY-PACKAGE"
   (:nicknames "MYPKG" "MY-PKG")
   (:use "COMMON-LISP")
   (:shadow "CAR" "CDR")
   (:shadowing-import-from "VENDOR-COMMON-LISP"  "CONS")
   (:import-from "VENDOR-COMMON-LISP"  "GC")
   (:export "EQ" "CONS" "FROBOLA")
   )
 
 
 (defpackage my-package
   (:nicknames mypkg :MY-PKG)  ; remember Common Lisp conventions for case
   (:use common-lisp)          ; conversion on symbols
   (:shadow CAR :cdr #:cons)                              
   (:export "CONS")            ; this is the shadowed one.
   )
```
