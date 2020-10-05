<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function WRITE-CHAR

### Syntax
`write-char character &optional output-stream => character`  


### Arguments and Values
- **character** : a character.   
- **output-stream** :  an output stream designator. The default is standard output.   


### Description
write-char outputs character to output-stream.



### Examples
```lisp 
(write-char #\a)
>>  a
=>  #\a
 (with-output-to-string (s) 
   (write-char #\a s)
   (write-char #\Space s)
   (write-char #\b s))
=>  "a b"Side Effects:
The output-stream is modified.
```
