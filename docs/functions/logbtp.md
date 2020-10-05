<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function LOGBITP

### Syntax
`logbitp index integer => generalized-boolean`  


### Arguments and Values
- **index** : a non-negative integer.   
- **integer** : an integer.   
- **generalized-boolean** : a generalized boolean.   


### Description
logbitp is used to test the value of a particular bit in integer, that is treated as if it were binary. The value of logbitp is true if the bit in integer whose index is index (that is, its weight is 2^index) is a one-bit; otherwise it is false.  
Negative integers are treated as if they were in two's-complement notation.



### Examples
```lisp 
(logbitp 1 1) =>  false
 (logbitp 0 1) =>  true
 (logbitp 3 10) =>  true
 (logbitp 1000000 -1) =>  true
 (logbitp 2 6) =>  true
 (logbitp 0 6) =>  falseSide Effects: None.
```
