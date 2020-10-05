<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function SPECIAL-OPERATOR-P

### Syntax
`special-operator-p symbol => generalized-boolean`  


### Arguments and Values
- **symbol** : a symbol.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if symbol is a special operator; otherwise, returns false.



### Examples
```lisp 
(special-operator-p 'if) =>  true
 (special-operator-p 'car) =>  false
 (special-operator-p 'one) =>  falseSide Effects: None.
```
