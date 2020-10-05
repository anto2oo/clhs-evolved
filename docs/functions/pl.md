<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function +

### Syntax
`+ &rest numbers => sum`  


### Arguments and Values
- **number** : a number.   
- **sum** : a number.   


### Description
Returns the sum of numbers, performing any necessary type conversions in the process. If no numbers are supplied, 0 is returned.



### Examples
```lisp 
(+) =>  0
 (+ 1) =>  1
 (+ 31/100 69/100) =>  1
 (+ 1/5 0.8) =>  1.0
```
