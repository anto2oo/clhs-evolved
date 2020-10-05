<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function MOD, REM

### Syntax
`mod number divisor => modulus`  
`rem number divisor => remainder`  


### Arguments and Values
- **number** : a real.   
- **divisor** : a real.   
- **modulus, remainder** : a real.   


### Description
mod and rem are generalizations of the modulus and remainder functions respectively.  
mod performs the operation floor on number and divisor and returns the remainder of the floor operation.  
rem performs the operation truncate on number and divisor and returns the remainder of the truncate operation.  
mod and rem are the modulus and remainder functions when number and divisor are integers.



### Examples
```lisp 
(rem -1 5) =>  -1
 (mod -1 5) =>  4
 (mod 13 4) =>  1
 (rem 13 4) =>  1
 (mod -13 4) =>  3
 (rem -13 4) =>  -1
 (mod 13 -4) =>  -3
 (rem 13 -4) =>  1
 (mod -13 -4) =>  -1
 (rem -13 -4) =>  -1
 (mod 13.4 1) =>  0.4
 (rem 13.4 1) =>  0.4
 (mod -13.4 1) =>  0.6
 (rem -13.4 1) =>  -0.4Side Effects: None.
```
