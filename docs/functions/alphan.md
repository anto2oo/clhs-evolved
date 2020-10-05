<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ALPHANUMERICP

### Syntax
`alphanumericp character => generalized-boolean`  


### Arguments and Values
- **character** : a character.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if character is an alphabetic[1] character or a numeric character; otherwise, returns false.



### Examples
```lisp 
(alphanumericp #\Z) =>  true
 (alphanumericp #\9) =>  true
 (alphanumericp #\Newline) =>  false
 (alphanumericp #\#) =>  false
```
