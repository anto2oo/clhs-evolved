<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function VECTOR-POP

### Syntax
`vector-pop vector => element`  


### Arguments and Values
- **vector** : a vector with a fill pointer.   
- **element** : an object.   


### Description
Decreases the fill pointer of vector by one, and retrieves the element of vector that is designated by the new fill pointer.



### Examples
```lisp 
(vector-push (setq fable (list 'fable))
              (setq fa (make-array 8
                                   :fill-pointer 2
                                   :initial-element 'sisyphus))) =>  2 
 (fill-pointer fa) =>  3 
 (eq (vector-pop fa) fable) =>  true
 (vector-pop fa) =>  SISYPHUS 
 (fill-pointer fa) =>  1Side Effects:
The fill pointer is decreased by one.
```
