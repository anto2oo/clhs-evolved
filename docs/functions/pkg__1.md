<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function PACKAGE-USED-BY-LIST

### Syntax
`package-used-by-list package => used-by-list`  


### Arguments and Values
- **package** : a package designator.   
- **used-by-list** : a list of package objects.   


### Description
package-used-by-list returns a list of other packages that use package.



### Examples
```lisp 
(package-used-by-list (make-package 'temp)) =>  ()
 (make-package 'trash :use '(temp)) =>  #<PACKAGE "TRASH">
 (package-used-by-list 'temp) =>  (#<PACKAGE "TRASH">)Side Effects: None.
```
