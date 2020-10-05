<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ZEROP

### Syntax
`zerop number => generalized-booleanPronunciation:`  
`['zee(,)roh(,)pee]`  


### Arguments and Values
- **number** : a number.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if number is zero (integer, float, or complex); otherwise, returns false.  
Regardless of whether an implementation provides distinct representations for positive and negative floating-point zeros, (zerop -0.0) always returns true.



### Examples
```lisp 
(zerop 0) =>  true
 (zerop 1) =>  false
 (zerop -0.0) =>  true
 (zerop 0/100) =>  true
 (zerop #c(0 0.0)) =>  trueSide Effects: None.
```
