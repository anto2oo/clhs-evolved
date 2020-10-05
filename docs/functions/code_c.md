<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function CODE-CHAR

### Syntax
`code-char code => char-p`  


### Arguments and Values
- **code** : a character code.   
- **char-p** : a character or nil.   


### Description
Returns a character with the code attribute given by code. If no such character exists and one cannot be created, nil is returned.



### Examples
```lisp 
(code-char 65.) =>  #\A  ;in an implementation using ASCII codes
(code-char (char-code #\Space)) =>  #\Space  ;in any implementation
```
