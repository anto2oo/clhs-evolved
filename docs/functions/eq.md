<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function EQ

### Syntax
`eq x y => generalized-boolean`  


### Arguments and Values
- **x** : an object.   
- **y** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if its arguments are the same, identical object; otherwise, returns false.



### Examples
```lisp 
(eq 'a 'b) =>  false
 (eq 'a 'a) =>  true
 (eq 3 3)
=>  true
OR=>  false
 (eq 3 3.0) =>  false
 (eq 3.0 3.0)
=>  true
OR=>  false
 (eq #c(3 -4) #c(3 -4))
=>  true
OR=>  false
 (eq #c(3 -4.0) #c(3 -4)) =>  false
 (eq (cons 'a 'b) (cons 'a 'c)) =>  false
 (eq (cons 'a 'b) (cons 'a 'b)) =>  false
 (eq '(a . b) '(a . b))
=>  true
OR=>  false
 (progn (setq x (cons 'a 'b)) (eq x x)) =>  true
 (progn (setq x '(a . b)) (eq x x)) =>  true
 (eq #\A #\A)
=>  true
OR=>  false
 (let ((x "Foo")) (eq x x)) =>  true
 (eq "Foo" "Foo")
=>  true
OR=>  false
 (eq "Foo" (copy-seq "Foo")) =>  false
 (eq "FOO" "foo") =>  false
 (eq "string-seq" (copy-seq "string-seq")) =>  false
 (let ((x 5)) (eq x x))
=>  true
OR=>  falseSide Effects: None.
```
