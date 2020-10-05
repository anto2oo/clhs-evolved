<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function EXP, EXPT

### Syntax
`exp number => result`  
`expt base-number power-number => result`  


### Arguments and Values
- **number** : a number.   
- **base-number** : a number.   
- **power-number** : a number.   
- **result** : a number.   


### Description
exp and expt perform exponentiation.  
exp returns e raised to the power number, where e is the base of the natural logarithms. exp has no branch cut.  
expt returns base-number raised to the power power-number. If the base-number is a rational and power-number is an integer, the calculation is exact and the result will be of type rational; otherwise a floating-point approximation might result.  For expt of a complex rational to an integer power, the calculation must be exact and the result is of type (or rational (complex rational)).  
The result of expt can be a complex, even when neither argument is a complex, if base-number is negative and power-number is not an integer. The result is always the principal complex value. For example, (expt -8 1/3) is not permitted to return -2, even though -2 is one of the cube roots of -8. The principal cube root is a complex approximately equal to #C(1.0 1.73205), not -2.  
expt is defined as b^x = e^x log b. This defines the principal values precisely. The range of expt is the entire complex plane. Regarded as a function of x, with b fixed, there is no branch cut. Regarded as a function of b, with x fixed, there is in general a branch cut along the negative real axis, continuous with quadrant II. The domain excludes the origin. By definition, 0^0=1. If b=0 and the real part of x is strictly positive, then b^x=0. For all other values of x, 0^x is an error.  
When power-number is an integer 0, then the result is always the value one in the type of base-number, even if the base-number is zero (of any type). That is:  
 (expt x 0) ==  (coerce 1 (type-of x))



### Examples
```lisp 
(exp 0) =>  1.0
 (exp 1) =>  2.718282
 (exp (log 5)) =>  5.0 
 (expt 2 8) =>  256
 (expt 4 .5) =>  2.0
 (expt #c(0 1) 2) =>  -1
 (expt #c(2 2) 3) =>  #C(-16 16)
 (expt #c(2 2) 4) =>  -64
```
