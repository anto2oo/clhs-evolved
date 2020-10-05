<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function PACKAGE-NICKNAMES

### Syntax
`package-nicknames package => nicknames`  


### Arguments and Values
- **package** : a package designator.   
- **nicknames** : a list of strings.   


### Description
Returns the list of nickname strings for package, not including the name of package.



### Examples
```lisp 
(package-nicknames (make-package 'temporary
                                   :nicknames '("TEMP" "temp")))
=>  ("temp" "TEMP")Side Effects: None.
```
