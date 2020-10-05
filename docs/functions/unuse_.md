<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function UNUSE-PACKAGE

### Syntax
`unuse-package packages-to-unuse &optional package => t`  


### Arguments and Values
- **packages-to-unuse** : a designator for a list of package designators.   
- **package** : a package designator. The default is the current package.   


### Description
unuse-package causes package to cease inheriting all the external symbols of packages-to-unuse; unuse-package undoes the effects of use-package. The packages-to-unuse are removed from the use list of package.  
Any symbols that have been imported into package continue to be present in package.



### Examples
```lisp 
(in-package "COMMON-LISP-USER") =>  #<PACKAGE "COMMON-LISP-USER">
 (export (intern "SHOES" (make-package 'temp)) 'temp) =>  T
 (find-symbol "SHOES") =>  NIL, NIL
 (use-package 'temp) =>  T
 (find-symbol "SHOES") =>  SHOES, :INHERITED
 (find (find-package 'temp) (package-use-list 'common-lisp-user)) =>  #<PACKAGE "TEMP">
 (unuse-package 'temp) =>  T
 (find-symbol "SHOES") =>  NIL, NILSide Effects:
The use list of package is modified.
```
