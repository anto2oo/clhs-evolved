<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function INTEGER-LENGTH

### Syntax
`integer-length integer => number-of-bits`  


### Arguments and Values
- **integer** : an integer.   
- **number-of-bits** : a non-negative integer.   


### Description
Returns the number of bits needed to represent integer in binary two's-complement format.



### Examples
```lisp 
(integer-length 0) =>  0
 (integer-length 1) =>  1
 (integer-length 3) =>  2
 (integer-length 4) =>  3
 (integer-length 7) =>  3
 (integer-length -1) =>  0
 (integer-length -4) =>  2
 (integer-length -7) =>  3
 (integer-length -8) =>  3
 (integer-length (expt 2 9)) =>  10
 (integer-length (1- (expt 2 9))) =>  9
 (integer-length (- (expt 2 9))) =>  9
 (integer-length (- (1+ (expt 2 9)))) =>  10Side Effects: None.
```
