<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function READ-DELIMITED-LIST

### Syntax
`read-delimited-list char &optional input-stream recursive-p => list`  


### Arguments and Values
- **char** : a character.   
- **input-stream** : an input stream designator. The default is standard input.   
- **recursive-p** : a generalized boolean. The default is false.   
- **list** : a list of the objects read.   


### Description
read-delimited-list reads objects from input-stream until the next character after an object's representation (ignoring whitespace[2] characters and comments) is char.  
read-delimited-list looks ahead at each step for the next non-whitespace[2] character and peeks at it as if with peek-char. If it is char, then the character is consumed and the list of objects is returned. If it is a constituent or escape character, then read is used to read an object, which is added to the end of the list. If it is a macro character, its reader macro function is called; if the function returns a value, that value is added to the list. The peek-ahead process is then repeated.  
If recursive-p is true, this call is expected to be embedded in a higher-level call to read or a similar function.  
It is an error to reach end-of-file during the operation of read-delimited-list.  
The consequences are undefined if char has a syntax type of whitespace[2] in the current readtable.



### Examples
```lisp 
(read-delimited-list #\]) 1 2 3 4 5 6 ]
=>  (1 2 3 4 5 6)
 #{p q z a}  reads as  ((p q) (p z) (p a) (q z) (q a) (z a))
 (defun |#{-reader| (stream char arg)
   (declare (ignore char arg))
   (mapcon #'(lambda (x)
              (mapcar #'(lambda (y) (list (car x) y)) (cdr x)))
          (read-delimited-list #\} stream t))) =>  |#{-reader|

 (set-dispatch-macro-character #\# #\{ #'|#{-reader|) =>  T 
 (set-macro-character #\} (get-macro-character #\) nil))
It is necessary here to give a definition to the character } as well to prevent it from being a constituent. If the line
 (set-macro-character #\} (get-macro-character #\) nil))
 #{ p q z a}
Giving } the same definition as the standard definition of the character ) has the twin benefit of making it terminate tokens for use with read-delimited-list and also making it invalid for use in any other context. Attempting to read a stray } will signal an error.
```
