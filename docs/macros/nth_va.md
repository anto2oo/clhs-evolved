<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro NTH-VALUE

### Syntax
`nth-value n form => object`  


### Arguments and Values
- **n** : a non-negative integer; evaluated.   
- **form** : a form; evaluated as described below.   
- **object** : an object.   


### Description
Evaluates n and then form, returning as its only value the nth value yielded by form, or nil if n is greater than or equal to the number of values returned by form. (The first returned value is numbered 0.)



### Examples
```lisp 
(nth-value 0 (values 'a 'b)) =>  A
 (nth-value 1 (values 'a 'b)) =>  B
 (nth-value 2 (values 'a 'b)) =>  NIL
 (let* ((x 83927472397238947423879243432432432)
        (y 32423489732)
        (a (nth-value 1 (floor x y)))
        (b (mod x y)))
   (values a b (= a b)))
=>  3332987528, 3332987528, trueSide Effects: None.
```
