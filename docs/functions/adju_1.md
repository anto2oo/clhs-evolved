<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ADJUSTABLE-ARRAY-P

### Syntax
`adjustable-array-p array => generalized-boolean`  


### Arguments and Values
- **array** : an array.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if and only if adjust-array could return a value which is identical to array when given that array as its first argument.



### Examples
```lisp 
(adjustable-array-p 
   (make-array 5
               :element-type 'character 
               :adjustable t 
               :fill-pointer 3)) =>  true
 (adjustable-array-p (make-array 4)) =>  implementation-dependent
```
