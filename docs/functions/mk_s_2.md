<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function MAKE-STRING-OUTPUT-STREAM

### Syntax
`make-string-output-stream &key element-type => string-stream`  


### Arguments and Values
- **element-type** : a type specifier. The default is character.   
- **string-stream** : an output string stream.   


### Description
Returns  an output string stream that accepts characters and makes available (via get-output-stream-string) a string that contains the characters that were actually output.  
The element-type names the type of the elements of the string; a string is constructed of the most specialized type that can accommodate elements of that element-type.



### Examples
```lisp 
(let ((s (make-string-output-stream)))
   (write-string "testing... " s)
   (prin1 1234 s)
   (get-output-stream-string s))
=>  "testing... 1234"
```
