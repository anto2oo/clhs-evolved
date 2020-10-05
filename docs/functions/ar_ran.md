<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ARRAY-RANK

### Syntax
`array-rank array => rank`  


### Arguments and Values
- **array** : an array.   
- **rank** : a non-negative integer.   


### Description
Returns the number of dimensions of array.



### Examples
```lisp 
(array-rank (make-array '())) =>  0
 (array-rank (make-array 4)) =>  1
 (array-rank (make-array '(4))) =>  1
 (array-rank (make-array '(2 3))) =>  2
```
