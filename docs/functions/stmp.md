<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function STREAMP

### Syntax
`streamp object => generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is of type stream; otherwise, returns false.  
 streamp is unaffected by whether object, if it is a stream, is open or closed.



### Examples
```lisp 
(streamp *terminal-io*) =>  true
 (streamp 1) =>  falseSide Effects: None.
```
