<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function CONS

### Syntax
`cons object-1 object-2 => cons`  


### Arguments and Values
- **object-1** : an object.   
- **object-2** : an object.   
- **cons** : a cons.   


### Description
Creates a fresh cons, the car of which is object-1 and the cdr of which is object-2.



### Examples
```lisp 
(cons 1 2) =>  (1 . 2)
 (cons 1 nil) =>  (1)
 (cons nil 2) =>  (NIL . 2)
 (cons nil nil) =>  (NIL)
 (cons 1 (cons 2 (cons 3 (cons 4 nil)))) =>  (1 2 3 4)
 (cons 'a 'b) =>  (A . B)
 (cons 'a (cons 'b (cons 'c '()))) =>  (A B C)
 (cons 'a '(b c d)) =>  (A B C D)Side Effects: None.
```
