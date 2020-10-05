<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function SET-SYNTAX-FROM-CHAR

### Syntax
`set-syntax-from-char to-char from-char &optional to-readtable from-readtable => t`  


### Arguments and Values
- **to-char** : a character.   
- **from-char** : a character.   
- **to-readtable** : a readtable. The default is the current readtable.   
- **from-readtable** : a readtable designator. The default is the standard readtable.   


### Description
set-syntax-from-char makes the syntax of to-char in to-readtable be the same as the syntax of from-char in from-readtable.  
set-syntax-from-char copies the syntax types of from-char. If from-char is a macro character, its reader macro function is copied also. If the character is a dispatching macro character, its entire dispatch table of reader macro functions is copied. The constituent traits of from-char are not copied.  
A macro definition from a character such as " can be copied to another character; the standard definition for " looks for another character that is the same as the character that invoked it. The definition of ( can not be meaningfully copied to {, on the other hand. The result is that lists are of the form {a b c), not {a b c}, because the definition always looks for a closing parenthesis, not a closing brace.



### Examples
```lisp 
(set-syntax-from-char #\7 #\;) =>  T
 123579 =>  1235Side Effects:
The to-readtable is modified.
```
