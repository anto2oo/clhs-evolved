<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function TYPE-OF

### Syntax
`type-of object => typespec`  


### Arguments and Values
- **object** : an object.   
- **typespec** : a type specifier.   


### Description
Returns a type specifier, typespec, for a type that has the object as an element. The typespec satisfies the following:  
 (subtypep (type-of object) (class-of object)) =>  true, true



### Examples
```lisp 
(type-of 'a) =>  SYMBOL          
 (type-of '(1 . 2))
=>  CONS
OR=>  (CONS FIXNUM FIXNUM)
 (type-of #c(0 1))
=>  COMPLEX
OR=>  (COMPLEX INTEGER)
 (defstruct temp-struct x y z) =>  TEMP-STRUCT
 (type-of (make-temp-struct)) =>  TEMP-STRUCT
 (type-of "abc")
=>  STRING
OR=>  (STRING 3)
 (subtypep (type-of "abc") 'string) =>  true, true
 (type-of (expt 2 40))
=>  BIGNUM
OR=>  INTEGER
OR=>  (INTEGER 1099511627776 1099511627776)
OR=>  SYSTEM::TWO-WORD-BIGNUM
OR=>  FIXNUM
 (subtypep (type-of 112312) 'integer) =>  true, true
 (defvar *foo* (make-array 5 :element-type t)) =>  *FOO*
 (class-name (class-of *foo*)) =>  VECTOR
 (type-of *foo*)
=>  VECTOR
OR=>  (VECTOR T 5)
```
