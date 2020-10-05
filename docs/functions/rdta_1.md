<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function READTABLEP

### Syntax
`readtablep object => generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is of type readtable; otherwise, returns false.



### Examples
```lisp 
(readtablep *readtable*) =>  true
 (readtablep (copy-readtable)) =>  true
 (readtablep '*readtable*) =>  falseSide Effects: None.
```
