<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function FUNCALL

### Syntax
`funcall function &rest args => result*`  


### Arguments and Values
- **function** : a function designator.   
- **args** : arguments to the function.   
- **results** : the values returned by the function.   


### Description
funcall applies function to args.  If function is a symbol, it is coerced to a function as if by finding its functional value in the global environment.



### Examples
```lisp 
(funcall #'+ 1 2 3) =>  6
 (funcall 'car '(1 2 3)) =>  1
 (funcall 'position 1 '(1 2 3 2 1) :start 1) =>  4
 (cons 1 2) =>  (1 . 2)
 (flet ((cons (x y) `(kons ,x ,y)))
   (let ((cons (symbol-function '+)))
     (funcall #'cons
              (funcall 'cons 1 2)
              (funcall cons 1 2))))
=>  (KONS (1 . 2) 3)
```
