<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function EQL

### Syntax
`eql x y => generalized-boolean`  


### Arguments and Values
- **x** : an object.   
- **y** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
The value of eql is true of two objects, x and y, in the folowing cases:  
Otherwise the value of eql is false.  
If an implementation supports positive and negative zeros as distinct values, then (eql 0.0 -0.0) returns false. Otherwise, when the syntax -0.0 is read it is interpreted as the value 0.0, and so (eql 0.0 -0.0) returns true.



### Examples
```lisp 
(eql 'a 'b) =>  false
 (eql 'a 'a) =>  true
 (eql 3 3) =>  true
 (eql 3 3.0) =>  false
 (eql 3.0 3.0) =>  true
 (eql #c(3 -4) #c(3 -4)) =>  true
 (eql #c(3 -4.0) #c(3 -4)) =>  false
 (eql (cons 'a 'b) (cons 'a 'c)) =>  false
 (eql (cons 'a 'b) (cons 'a 'b)) =>  false
 (eql '(a . b) '(a . b))
=>  true
OR=>  false
 (progn (setq x (cons 'a 'b)) (eql x x)) =>  true
 (progn (setq x '(a . b)) (eql x x)) =>  true
 (eql #\A #\A) =>  true
 (eql "Foo" "Foo")
=>  true
OR=>  false
 (eql "Foo" (copy-seq "Foo")) =>  false
 (eql "FOO" "foo") =>  false
Normally (eql 1.0s0 1.0d0) is false, under the assumption that 1.0s0 and 1.0d0 are of distinct data types. However, implementations that do not provide four distinct floating-point formats are permitted to ``collapse'' the four formats into some smaller number of them; in such an implementation (eql 1.0s0 1.0d0) might be true.Side Effects: None.
```
