<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ARRAY-DIMENSION

### Syntax
`array-dimension array axis-number => dimension`  


### Arguments and Values
- **array** : an array.   
- **axis-number** : an integer greater than or equal to zero and less than the rank of the array.   
- **dimension** : a non-negative integer.   


### Description
array-dimension returns the axis-number dimension[1] of array. (Any fill pointer is ignored.)



### Examples
```lisp 
(array-dimension (make-array 4) 0) =>  4
 (array-dimension (make-array '(2 3)) 1) =>  3
```
