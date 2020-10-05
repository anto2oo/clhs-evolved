<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Special Operator QUOTE

### Syntax
`quote object => object`  


### Arguments and Values
- **object** : an object; not evaluated.   


### Description
The quote special operator just returns object.  
The consequences are undefined if literal objects (including quoted objects) are destructively modified.



### Examples
```lisp 
(setq a 1) =>  1
 (quote (setq a 3)) =>  (SETQ A 3)
 a =>  1
 'a =>  A
 ''a =>  (QUOTE A) 
 '''a =>  (QUOTE (QUOTE A))
 (setq a 43) =>  43
 (list a (cons a 3)) =>  (43 (43 . 3))
 (list (quote a) (quote (cons a 3))) =>  (A (CONS A 3)) 
 1 =>  1
 '1 =>  1
 "foo" =>  "foo"
 '"foo" =>  "foo"
 (car '(a b)) =>  A
 '(car '(a b)) =>  (CAR (QUOTE (A B)))
 #(car '(a b)) =>  #(CAR (QUOTE (A B)))
 '#(car '(a b)) =>  #(CAR (QUOTE (A B)))
```
