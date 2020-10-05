<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function FLOOR, FFLOOR, CEILING, FCEILING, TRUNCATE, FTRUNCATE, ROUND, FROUND

### Syntax
`floor number &optional divisor => quotient, remainder`  
`ffloor number &optional divisor => quotient, remainder`  
`ceiling number &optional divisor => quotient, remainder`  
`fceiling number &optional divisor => quotient, remainder`  
`truncate number &optional divisor => quotient, remainder`  
`ftruncate number &optional divisor => quotient, remainder`  
`round number &optional divisor => quotient, remainder`  
`fround number &optional divisor => quotient, remainder`  


### Arguments and Values
- **number** : a real.   
- **divisor** : a non-zero real. The default is the integer 1.   
- **quotient** : for floor, ceiling, truncate, and round: an integer; for ffloor, fceiling, ftruncate, and fround: a float.   
- **remainder** : a real.   


### Description
These functions divide number by divisor, returning a quotient and remainder, such that  
  quotient*divisor+remainder=number  
The quotient always represents a mathematical integer. When more than one mathematical integer might be possible (i.e., when the remainder is not zero), the kind of rounding or truncation depends on the operator:  
All of these functions perform type conversion operations on numbers.  
The remainder is an integer if both x and y are integers, is a rational if both x and y are rationals, and is a float if either x or y is a float.  
ffloor, fceiling, ftruncate, and fround handle arguments of different types in the following way: If number is a float, and divisor is not a float of longer format, then the first result is a float of the same type as number. Otherwise, the first result is of the type determined by contagion rules; see Section 12.1.1.2 (Contagion in Numeric Operations).



### Examples
```lisp 
(floor 3/2) =>  1, 1/2
 (ceiling 3 2) =>  2, -1
 (ffloor 3 2) =>  1.0, 1
 (ffloor -4.7) =>  -5.0, 0.3
 (ffloor 3.5d0) =>  3.0d0, 0.5d0
 (fceiling 3/2) =>  2.0, -1/2
 (truncate 1) =>  1, 0
 (truncate .5) =>  0, 0.5
 (round .5) =>  0, 0.5
 (ftruncate -7 2) =>  -3.0, -1
 (fround -7 2) =>  -4.0, 1
 (dolist (n '(2.6 2.5 2.4 0.7 0.3 -0.3 -0.7 -2.4 -2.5 -2.6))
   (format t "~&~4,1@F ~2,' D ~2,' D ~2,' D ~2,' D"
           n (floor n) (ceiling n) (truncate n) (round n)))
>>  +2.6  2  3  2  3
>>  +2.5  2  3  2  2
>>  +2.4  2  3  2  2
>>  +0.7  0  1  0  1
>>  +0.3  0  1  0  0
>>  -0.3 -1  0  0  0
>>  -0.7 -1  0  0 -1
>>  -2.4 -3 -2 -2 -2
>>  -2.5 -3 -2 -2 -2
>>  -2.6 -3 -2 -2 -3
=>  NILSide Effects: None.
```
