<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function PACKAGEP

### Syntax
`packagep object => generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is of type package; otherwise, returns false.



### Examples
```lisp 
(packagep *package*) =>  true 
 (packagep 'common-lisp) =>  false 
 (packagep (find-package 'common-lisp)) =>  trueSide Effects: None.
```
