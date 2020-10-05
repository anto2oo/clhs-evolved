<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Accessor ELT

### Syntax
`elt sequence index => object`  
`(setf (elt sequence index) new-object)`  


### Arguments and Values
- **sequence** : a proper sequence.   
- **index** : a valid sequence index for sequence.   
- **object** : an object.   
- **new-object** : an object.   


### Description
Accesses the element of sequence specified by index.



### Examples
```lisp 
(setq str (copy-seq "0123456789")) =>  "0123456789"
 (elt str 6) =>  #\6
 (setf (elt str 0) #\#) =>  #\#
 str =>  "#123456789"Side Effects: None.
```
