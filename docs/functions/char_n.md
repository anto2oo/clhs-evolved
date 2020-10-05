<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function CHAR-NAME

### Syntax
`char-name character => name`  


### Arguments and Values
- **character** : a character.   
- **name** : a string or nil.   


### Description
Returns a string that is the name of the character, or nil if the character has no name.  
All non-graphic characters are required to have names unless they have some implementation-defined attribute which is not null. Whether or not other characters have names is implementation-dependent.  
 The standard characters <Newline> and <Space> have the respective names "Newline" and "Space". The semi-standard characters <Tab>, <Page>, <Rubout>, <Linefeed>, <Return>, and <Backspace> (if they are supported by the implementation) have the respective names "Tab", "Page", "Rubout", "Linefeed", "Return", and "Backspace" (in the indicated case, even though name lookup by ``#\'' and by the function name-char is not case sensitive).



### Examples
```lisp 
(char-name #\ ) =>  "Space"
 (char-name #\Space) =>  "Space"
 (char-name #\Page) =>  "Page"

 (char-name #\a)
=>  NIL
OR=>  "LOWERCASE-a"
OR=>  "Small-A"
OR=>  "LA01"

 (char-name #\A)
=>  NIL
OR=>  "UPPERCASE-A"
OR=>  "Capital-A"
OR=>  "LA02"

 ;; Even though its CHAR-NAME can vary, #\A prints as #\A
 (prin1-to-string (read-from-string (format nil "#\\~A" (or (char-name #\A) "A"))))
=>  "#\\A"
```
