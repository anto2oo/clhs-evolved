<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ARRAY-HAS-FILL-POINTER-P

### Syntax
`array-has-fill-pointer-p array => generalized-boolean`  


### Arguments and Values
- **array** : an array.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if array has a fill pointer; otherwise returns false.



### Examples
```lisp 
(array-has-fill-pointer-p (make-array 4)) =>  implementation-dependent
 (array-has-fill-pointer-p (make-array '(2 3))) =>  false
 (array-has-fill-pointer-p
   (make-array 8 
               :fill-pointer 2 
               :initial-element 'filler)) =>  true
```
