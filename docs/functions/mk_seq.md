<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function MAKE-SEQUENCE

### Syntax
`make-sequence result-type size &key initial-element => sequence`  


### Arguments and Values
- **result-type** : a sequence type specifier.   
- **size** : a non-negative integer.   
- **initial-element** : an object. The default is implementation-dependent.   
- **sequence** : a proper sequence.   


### Description
Returns a sequence of the type result-type and of length size, each of the elements of which has been initialized to initial-element.  
 If the result-type is a subtype of list, the result will be a list.  
If the result-type is a subtype of vector, then if the implementation can determine the element type specified for the result-type, the element type of the resulting array is the result of upgrading that element type; or, if the implementation can determine that the element type is unspecified (or *), the element type of the resulting array is t; otherwise, an error is signaled.



### Examples
```lisp 
(make-sequence 'list 0) =>  ()
 (make-sequence 'string 26 :initial-element #\.) 
=>  ".........................."
 (make-sequence '(vector double-float) 2
                :initial-element 1d0)
=>  #(1.0d0 1.0d0)
 (make-sequence '(vector * 2) 3) should signal an error
 (make-sequence '(vector * 4) 3) should signal an error
```
