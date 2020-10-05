<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Accessor ROW-MAJOR-AREF

### Syntax
`row-major-aref array index => element`  
`(setf (row-major-aref array index) new-element)`  


### Arguments and Values
- **array** : an array.   
- **index** : a valid array row-major index for the array.   
- **element, new-element** : an object.   


### Description
Considers array as a vector by viewing its elements in row-major order, and returns the element of that vector which is referred to by the given index.  
row-major-aref is valid for use with setf.Examples: None.Side Effects: None.



### Examples
No example  
