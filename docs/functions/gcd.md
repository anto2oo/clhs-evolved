<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function GCD

### Syntax
`gcd &rest integers => greatest-common-denominator`  


### Arguments and Values
- **integer** : an integer.   
- **greatest-common-denominator** : a non-negative integer.   


### Description
Returns the greatest common divisor of integers. If only one integer is supplied, its absolute value is returned. If no integers are given, gcd returns 0, which is an identity for this operation.



### Examples
```lisp 
(gcd) =>  0
 (gcd 60 42) =>  6
 (gcd 3333 -33 101) =>  1
 (gcd 3333 -33 1002001) =>  11
 (gcd 91 -49) =>  7
 (gcd 63 -42 35) =>  7
 (gcd 5) =>  5
 (gcd -4) =>  4Side Effects: None.
```
