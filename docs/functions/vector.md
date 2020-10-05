<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function VECTOR

### Syntax
`vector &rest objects => vector`  


### Arguments and Values
- **object** : an object.   
- **vector** : a vector of type (vector t *).   


### Description
Creates a fresh simple general vector whose size corresponds to the number of objects.  
The vector is initialized to contain the objects.



### Examples
```lisp 
(arrayp (setq v (vector 1 2 'sirens))) =>  true
 (vectorp v) =>  true
 (simple-vector-p v) =>  true         
 (length v) =>  3Side Effects: None.
```
