<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function USE-PACKAGE

### Syntax
`use-package packages-to-use &optional package => t`  


### Arguments and Values
- **packages-to-use** : a designator for a list of package designators. The KEYWORD package may not be supplied.   
- **package** : a package designator. The default is the current package. The package cannot be the KEYWORD package.   


### Description
use-package causes package to inherit all the external symbols of packages-to-use. The inherited symbols become accessible as internal symbols of package.  
Packages-to-use are added to the use list of package if they are not there already. All external symbols in packages-to-use become accessible in package as internal symbols. use-package does not cause any new symbols to be present in package but only makes them accessible by inheritance.  
use-package checks for name conflicts between the newly imported symbols and those already accessible in package. A name conflict in use-package between two external symbols inherited by package from packages-to-use may be resolved in favor of either symbol by importing one of them into package and making it a shadowing symbol.



### Examples
```lisp 
(export (intern "LAND-FILL" (make-package 'trash)) 'trash) =>  T
 (find-symbol "LAND-FILL" (make-package 'temp)) =>  NIL, NIL
 (package-use-list 'temp) =>  (#<PACKAGE "TEMP">)
 (use-package 'trash 'temp) =>  T
 (package-use-list 'temp) =>  (#<PACKAGE "TEMP"> #<PACKAGE "TRASH">)
 (find-symbol "LAND-FILL" 'temp) =>  TRASH:LAND-FILL, :INHERITEDSide Effects:
The use list of package may be modified.
```
