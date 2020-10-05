<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function STANDARD-CHAR-P

### Syntax
`standard-char-p character => generalized-boolean`  


### Arguments and Values
- **character** : a character.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if character is of type standard-char; otherwise, returns false.



### Examples
```lisp 
(standard-char-p #\Space) =>  true
 (standard-char-p #\~) =>  true
 ;; This next example presupposes an implementation
 ;; in which #\Bell is a defined character.
 (standard-char-p #\Bell) =>  false
```
