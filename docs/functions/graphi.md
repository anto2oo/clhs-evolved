<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function GRAPHIC-CHAR-P

### Syntax
`graphic-char-p char => generalized-boolean`  


### Arguments and Values
- **char** : a character.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if character is a graphic character; otherwise, returns false.



### Examples
```lisp 
(graphic-char-p #\G) =>  true
 (graphic-char-p #\#) =>  true
 (graphic-char-p #\Space) =>  true
 (graphic-char-p #\Newline) =>  false
```
