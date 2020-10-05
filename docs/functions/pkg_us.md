<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function PACKAGE-USE-LIST

### Syntax
`package-use-list package => use-list`  


### Arguments and Values
- **package** : a package designator.   
- **use-list** : a list of package objects.   


### Description
Returns a list of other packages used by package.



### Examples
```lisp 
(package-use-list (make-package 'temp)) =>  (#<PACKAGE "COMMON-LISP">)
 (use-package 'common-lisp-user 'temp) =>  T
 (package-use-list 'temp) =>  (#<PACKAGE "COMMON-LISP"> #<PACKAGE "COMMON-LISP-USER">)Side Effects: None.
```
