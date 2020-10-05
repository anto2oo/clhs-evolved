<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ALPHA-CHAR-P

### Syntax
`alpha-char-p character => generalized-boolean`  


### Arguments and Values
- **character** : a character.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if character is an alphabetic[1] character; otherwise, returns false.



### Examples
```lisp 
(alpha-char-p #\a) =>  true
 (alpha-char-p #\5) =>  false
 (alpha-char-p #\Newline) =>  false
 ;; This next example presupposes an implementation
 ;; in which #\<ALPHA> is a defined character.
 (alpha-char-p #\<ALPHA>) =>  implementation-dependent
```
