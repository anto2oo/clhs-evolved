<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ARRAY-ROW-MAJOR-INDEX

### Syntax
`array-row-major-index array &rest subscripts => index`  


### Arguments and Values
- **array** : an array.   
- **subscripts** : a list of valid array indices for the array.   
- **index** : a valid array row-major index for the array.   


### Description
Computes the position according to the row-major ordering of array for the element that is specified by subscripts, and returns the offset of the element in the computed position from the beginning of array.  
For a one-dimensional array, the result of array-row-major-index equals subscript.  
array-row-major-index ignores fill pointers.



### Examples
```lisp 
(setq a (make-array '(4 7) :element-type '(unsigned-byte 8)))
 (array-row-major-index a 1 2) =>  9
 (array-row-major-index 
    (make-array '(2 3 4) 
                :element-type '(unsigned-byte 8)
                :displaced-to a
                :displaced-index-offset 4)
    0 2 1) =>  9
```
