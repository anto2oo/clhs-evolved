<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function LIST-ALL-PACKAGES

### Syntax
`list-all-packages <no arguments> => packages`  


### Arguments and Values
- **packages** : a list of package objects.   


### Description
list-all-packages returns a  fresh  list of  all registered packages.



### Examples
```lisp 
(let ((before (list-all-packages)))
    (make-package 'temp)
    (set-difference (list-all-packages) before)) =>  (#<PACKAGE "TEMP">)Side Effects: None.
```
