<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ARRAY-TOTAL-SIZE

### Syntax
`array-total-size array => size`  


### Arguments and Values
- **array** : an array.   
- **size** : a non-negative integer.   


### Description
Returns the array total size of the array.



### Examples
```lisp 
(array-total-size (make-array 4)) =>  4
 (array-total-size (make-array 4 :fill-pointer 2)) =>  4
 (array-total-size (make-array 0)) =>  0
 (array-total-size (make-array '(4 2))) =>  8
 (array-total-size (make-array '(4 0))) =>  0
 (array-total-size (make-array '())) =>  1
```
