<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function SIMPLE-STRING-P

### Syntax
`simple-string-p object => generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is of type simple-string; otherwise, returns false.



### Examples
```lisp 
(simple-string-p "aaaaaa") =>  true
 (simple-string-p (make-array 6 
                              :element-type 'character 
                              :fill-pointer t)) =>  falseSide Effects: None.
```
