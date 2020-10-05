<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function *

### Syntax
`* &rest numbers => product`  


### Arguments and Values
- **number** : a number.   
- **product** : a number.   


### Description
Returns the product of numbers, performing any necessary type conversions in the process. If no numbers are supplied, 1 is returned.



### Examples
```lisp 
(*) =>  1
 (* 3 5) =>  15
 (* 1.0 #c(22 33) 55/98) =>  #C(12.346938775510203 18.520408163265305)
```
