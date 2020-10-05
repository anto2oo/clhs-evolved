<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function LIST-LENGTH

### Syntax
`list-length list => length`  


### Arguments and Values
- **list** : a proper list or a circular list.   
- **length** : a non-negative integer, or nil.   


### Description
Returns the length of list if list is a proper list. Returns nil if list is a circular list.



### Examples
```lisp 
(list-length '(a b c d)) =>  4
 (list-length '(a (b c) d)) =>  3
 (list-length '()) =>  0
 (list-length nil) =>  0
 (defun circular-list (&rest elements)
   (let ((cycle (copy-list elements))) 
     (nconc cycle cycle)))
 (list-length (circular-list 'a 'b)) =>  NIL
 (list-length (circular-list 'a)) =>  NIL
 (list-length (circular-list)) =>  0Side Effects: None.
```
