<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function FBOUNDP

### Syntax
`fboundp name => generalized-booleanPronunciation:`  
`[,ef'bandpee]`  


### Arguments and Values
- **name** : a function name.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if name is fbound; otherwise, returns false.



### Examples
```lisp 
(fboundp 'car) =>  true
 (fboundp 'nth-value) =>  false
 (fboundp 'with-open-file) =>  true
 (fboundp 'unwind-protect) =>  true
 (defun my-function (x) x) =>  MY-FUNCTION
 (fboundp 'my-function) =>  true
 (let ((saved-definition (symbol-function 'my-function)))
   (unwind-protect (progn (fmakunbound 'my-function)
                          (fboundp 'my-function))
     (setf (symbol-function 'my-function) saved-definition)))
=>  false
 (fboundp 'my-function) =>  true
 (defmacro my-macro (x) `',x) =>  MY-MACRO
 (fboundp 'my-macro) =>  true
 (fmakunbound 'my-function) =>  MY-FUNCTION
 (fboundp 'my-function) =>  false
 (flet ((my-function (x) x))
   (fboundp 'my-function)) =>  falseSide Effects: None.
```
