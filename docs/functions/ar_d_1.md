<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ARRAY-DIMENSIONS

### Syntax
`array-dimensions array => dimensions`  


### Arguments and Values
- **array** : an array.   
- **dimensions** : a list of integers.   


### Description
Returns a list of the dimensions of array. (If array is a vector with a fill pointer, that fill pointer is ignored.)



### Examples
```lisp 
(array-dimensions (make-array 4)) =>  (4)
 (array-dimensions (make-array '(2 3))) =>  (2 3)
 (array-dimensions (make-array 4 :fill-pointer 2)) =>  (4)
```
