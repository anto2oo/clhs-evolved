<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function NUMERATOR, DENOMINATOR

### Syntax
`numerator rational => numerator`  
`denominator rational => denominator`  


### Arguments and Values
- **rational** : a rational.   
- **numerator** : an integer.   
- **denominator** : a positive integer.   


### Description
numerator and denominator reduce rational to canonical form and compute the numerator or denominator of that number.  
numerator and denominator return the numerator or denominator of the canonical form of rational.  
If rational is an integer, numerator returns rational and denominator returns 1.



### Examples
```lisp 
(numerator 1/2) =>  1
 (denominator 12/36) =>  3
 (numerator -1) =>  -1
 (denominator (/ -33)) =>  33
 (numerator (/ 8 -6)) =>  -4
 (denominator (/ 8 -6)) =>  3Side Effects: None.
```
