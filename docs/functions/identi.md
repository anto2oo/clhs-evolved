<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function IDENTITY

### Syntax
`identity object => object`  


### Arguments and Values
- **object** : an object.   


### Description
Returns its argument object.



### Examples
```lisp 
(identity 101) =>  101
 (mapcan #'identity (list (list 1 2 3) '(4 5 6))) =>  (1 2 3 4 5 6)Side Effects: None.
```
