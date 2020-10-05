<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function COERCE

### Syntax
`coerce object result-type => result`  


### Arguments and Values
- **object** : an object.   
- **result-type** : a type specifier.   
- **result** : an object, of type result-type except in situations described in Section 12.1.5.3 (Rule of Canonical Representation for Complex Rationals).   


### Description
Coerces the object to type result-type.  
If object is already of type result-type, the object itself is returned, regardless of whether it would have been possible in general to coerce an object of some other type to result-type.  
Otherwise, the object is coerced to type result-type according to the following rules:  
If the result-type is a recognizable subtype of list, and the object is a sequence, then the result is a list that has the same elements as object.  
If the result-type is a recognizable subtype of vector, and the object is a sequence, then the result is a vector that has the same elements as object. If result-type is a specialized type, the result has an actual array element type that is the result of upgrading the element type part of that specialized type. If no element type is specified, the element type defaults to t. If the implementation cannot determine the element type, an error is signaled.  
If the result-type is function, and object is a lambda expression, then the result is a closure of object in the null lexical environment.



### Examples
```lisp 
(coerce '(a b c) 'vector) =>  #(A B C)
 (coerce 'a 'character) =>  #\A
 (coerce 4.56 'complex) =>  #C(4.56 0.0)
 (coerce 4.5s0 'complex) =>  #C(4.5s0 0.0s0)
 (coerce 7/2 'complex) =>  7/2
 (coerce 0 'short-float) =>  0.0s0
 (coerce 3.5L0 'float) =>  3.5L0
 (coerce 7/2 'float) =>  3.5
 (coerce (cons 1 2) t) =>  (1 . 2)
 All the following forms should signal an error:
 (coerce '(a b c) '(vector * 4))
 (coerce #(a b c) '(vector * 4))
 (coerce '(a b c) '(vector * 2))
 (coerce #(a b c) '(vector * 2))
 (coerce "foo" '(string 2))
 (coerce #(#\a #\b #\c) '(string 2))
 (coerce '(0 1) '(simple-bit-vector 3))
```
