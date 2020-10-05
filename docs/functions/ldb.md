<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Accessor LDB

### Syntax
`ldb bytespec integer => byte`  
`(setf (ldb bytespec place) new-byte)Pronunciation:`  
`['lidib] or ['liduhb] or ['el'dee'bee]`  


### Arguments and Values
- **bytespec** : a byte specifier.   
- **integer** : an integer.   
- **byte, new-byte** : a non-negative integer.   


### Description
ldb extracts and returns the byte of integer specified by bytespec.  
ldb returns an integer in which the bits with weights 2^(s-1) through 2^0 are the same as those in integer with weights 2^(p+s-1) through 2^p, and all other bits zero; s is (byte-size bytespec) and p is (byte-position bytespec).  
setf may be used with ldb to modify a byte within the integer that is stored in a given place.  The order of evaluation, when an ldb form is supplied to setf, is exactly left-to-right.  The effect is to perform a dpb operation and then store the result back into the place.



### Examples
```lisp 
(ldb (byte 2 1) 10) =>  1
 (setq a (list 8)) =>  (8)
 (setf (ldb (byte 2 1) (car a)) 1) =>  1
 a =>  (10)Side Effects: None.
```
