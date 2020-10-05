<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function NAME-CHAR

### Syntax
`name-char name => char-p`  


### Arguments and Values
- **name** : a string designator.   
- **char-p** : a character or nil.   


### Description
Returns the character object whose name is name (as determined by string-equal---i.e., lookup is not case sensitive). If such a character does not exist, nil is returned.



### Examples
```lisp 
(name-char 'space) =>  #\Space
(name-char "space") =>  #\Space
(name-char "Space") =>  #\Space
(let ((x (char-name #\a)))
  (or (not x) (eql (name-char x) #\a))) =>  true
```
