<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function PACKAGE-ERROR-PACKAGE

### Syntax
`package-error-package condition => package`  


### Arguments and Values
- **condition** : a condition of type package-error.   
- **package** : a package designator.   


### Description
Returns a designator for the offending package in the situation represented by the condition.



### Examples
```lisp 
(package-error-package 
   (make-condition 'package-error
     :package (find-package "COMMON-LISP")))
=>  #<Package "COMMON-LISP">Side Effects: None.
```
