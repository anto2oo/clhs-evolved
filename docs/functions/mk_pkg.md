<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function MAKE-PACKAGE

### Syntax
`make-package package-name &key nicknames use => package`  


### Arguments and Values
- **package-name** : a string designator.   
- **nicknames** : a list of string designators. The default is the empty list.   
- **use** : a list of package designators.  The default is implementation-defined.   
- **package** : a package.   


### Description
Creates a new package with the name package-name.  
Nicknames are additional names which may be used to refer to the new package.  
use specifies zero or more packages the external symbols of which are to be inherited by the new package. See the function use-package.



### Examples
```lisp 
(make-package 'temporary :nicknames '("TEMP" "temp")) =>  #<PACKAGE "TEMPORARY">
 (make-package "OWNER" :use '("temp")) =>  #<PACKAGE "OWNER">
 (package-used-by-list 'temp) =>  (#<PACKAGE "OWNER">)
 (package-use-list 'owner) =>  (#<PACKAGE "TEMPORARY">)Side Effects: None.
```
