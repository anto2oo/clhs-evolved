<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function COPY-SEQ

### Syntax
`copy-seq sequence => copied-sequence`  


### Arguments and Values
- **sequence** : a proper sequence.   
- **copied-sequence** : a proper sequence.   


### Description
Creates a copy of sequence. The elements of the new sequence are the same as the corresponding elements of the given sequence.  
If sequence is a vector, the result is a fresh simple array of rank one that has the same actual array element type as sequence. If sequence is a list, the result is a fresh list.



### Examples
```lisp 
(setq str "a string") =>  "a string"
 (equalp str (copy-seq str)) =>  true
 (eql str (copy-seq str)) =>  falseSide Effects: None.
```
