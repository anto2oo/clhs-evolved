<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function GENSYM

### Syntax
`gensym &optional x => new-symbol`  


### Arguments and Values
- **x** : a string or a non-negative integer. Complicated defaulting behavior; see below.   
- **new-symbol** : a fresh, uninterned symbol.   


### Description
Creates and returns a fresh, uninterned symbol, as if by calling make-symbol. (The only difference between gensym and make-symbol is in how the new-symbol's name is determined.)  
The name of the new-symbol is the concatenation of a prefix, which defaults to "G", and  a suffix, which is the decimal representation of a number that defaults to the value of *gensym-counter*.  
If x is supplied, and is a string, then that string is used as a prefix instead of "G" for this call to gensym only.  
If x is supplied, and is an integer, then that integer, instead of the value of *gensym-counter*, is used as the suffix for this call to gensym only.  
If and only if no explicit suffix is supplied, *gensym-counter* is incremented after it is used.



### Examples
```lisp 
(setq sym1 (gensym)) =>  #:G3142
 (symbol-package sym1) =>  NIL
 (setq sym2 (gensym 100)) =>  #:G100
 (setq sym3 (gensym 100)) =>  #:G100
 (eq sym2 sym3) =>  false
 (find-symbol "G100") =>  NIL, NIL
 (gensym "T") =>  #:T3143
 (gensym) =>  #:G3144Side Effects:
Might increment *gensym-counter*.
```
