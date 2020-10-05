<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function FMAKUNBOUND

### Syntax
`fmakunbound name => namePronunciation:`  
`[,ef'makuhn,band] or [,ef'maykuhn,band]`  


### Arguments and Values
- **name** : a function name.   


### Description
Removes the function or macro definition, if any, of name in the global environment.



### Examples
```lisp 
(defun add-some (x) (+ x 19)) =>  ADD-SOME
 (fboundp 'add-some) =>  true
 (flet ((add-some (x) (+ x 37)))
    (fmakunbound 'add-some)
    (add-some 1)) =>  38
 (fboundp 'add-some) =>  falseSide Effects: None.
```
