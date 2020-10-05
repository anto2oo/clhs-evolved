<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function MAKE-DISPATCH-MACRO-CHARACTER

### Syntax
`make-dispatch-macro-character char &optional non-terminating-p readtable => t`  


### Arguments and Values
- **char** : a character.   
- **non-terminating-p** : a generalized boolean. The default is false.   
- **readtable** : a readtable. The default is the current readtable.   


### Description
make-dispatch-macro-character makes char be a dispatching macro character in readtable.  
Initially, every character in the dispatch table associated with the char has an associated function that signals an error of type reader-error.  
If non-terminating-p is true, the dispatching macro character is made a non-terminating macro character; if non-terminating-p is false, the dispatching macro character is made a terminating macro character.



### Examples
```lisp 
(get-macro-character #\{) =>  NIL, false
 (make-dispatch-macro-character #\{) =>  T
 (not (get-macro-character #\{)) =>  falseSide Effects: None.
The readtable is altered.
```
