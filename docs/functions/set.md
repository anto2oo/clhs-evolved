<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function SET

### Syntax
`set symbol value => value`  


### Arguments and Values
- **symbol** : a symbol.   
- **value** : an object.   


### Description
set changes the contents of the value cell of symbol to the given value.  
(set symbol value) ==  (setf (symbol-value symbol) value)



### Examples
```lisp 
(setf (symbol-value 'n) 1) =>  1
 (set 'n 2) =>  2
 (symbol-value 'n) =>  2
 (let ((n 3))
   (declare (special n))
   (setq n (+ n 1))
   (setf (symbol-value 'n) (* n 10))
   (set 'n (+ (symbol-value 'n) n))
   n) =>  80
 n =>  2
 (let ((n 3))
   (setq n (+ n 1))
   (setf (symbol-value 'n) (* n 10))
   (set 'n (+ (symbol-value 'n) n))
   n) =>  4
 n =>  44
 (defvar *n* 2)
 (let ((*n* 3))
   (setq *n* (+ *n* 1))
   (setf (symbol-value '*n*) (* *n* 10))
   (set '*n* (+ (symbol-value '*n*) *n*))
   *n*) =>  80
  *n* =>  2
 (defvar *even-count* 0) =>  *EVEN-COUNT*
 (defvar *odd-count* 0) =>  *ODD-COUNT*
 (defun tally-list (list)
   (dolist (element list)
     (set (if (evenp element) '*even-count* '*odd-count*)
          (+ element (if (evenp element) *even-count* *odd-count*)))))
 (tally-list '(1 9 4 3 2 7)) =>  NIL
 *even-count* =>  6
 *odd-count* =>  20Side Effects:
The value of symbol is changed.
```
