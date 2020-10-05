<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function NTHCDR

### Syntax
`nthcdr n list => tail`  


### Arguments and Values
- **n** : a non-negative integer.   
- **list** : a list,  which might be a dotted list or a circular list.   
- **tail** : an object.   


### Description
Returns the tail of list that would be obtained by calling cdr n times in succession.



### Examples
```lisp 
(nthcdr 0 '()) =>  NIL
 (nthcdr 3 '()) =>  NIL
 (nthcdr 0 '(a b c)) =>  (A B C)
 (nthcdr 2 '(a b c)) =>  (C)
 (nthcdr 4 '(a b c)) =>  ()
 (nthcdr 1 '(0 . 1)) =>  1

 (locally (declare (optimize (safety 3)))
   (nthcdr 3 '(0 . 1)))
 Error: Attempted to take CDR of 1.Side Effects: None.
```
