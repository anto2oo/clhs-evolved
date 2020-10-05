<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function READ-FROM-STRING

### Syntax
`read-from-string string &optional eof-error-p eof-value &key start end preserve-whitespace => object, position`  


### Arguments and Values
- **string** : a string.   
- **eof-error-p** : a generalized boolean. The default is true.   
- **eof-value** : an object.  The default is nil.   
- **start, end** : bounding index designators of string. The defaults for start and end are 0 and nil, respectively.   
- **preserve-whitespace** : a generalized boolean. The default is false.   
- **object** : an object (parsed by the Lisp reader) or the eof-value.   
- **position** : an integer greater than or equal to zero, and less than or equal to one more than the length of the string.   


### Description
Parses the printed representation of an object from the subsequence of string bounded by start and end, as if read had been called on an input stream containing those same characters.  
If preserve-whitespace is true, the operation will preserve whitespace[2] as read-preserving-whitespace would do.  
If an object is successfully parsed, the primary value, object, is the object that was parsed. If eof-error-p is false and if the end of the substring is reached, eof-value is returned.  
The secondary value, position, is the index of the first character in the bounded string that was not read. The position may depend upon the value of preserve-whitespace. If the entire string was read, the position returned is either the length of the string or one greater than the length of the string.



### Examples
```lisp 
(read-from-string " 1 3 5" t nil :start 2) =>  3, 5
 (read-from-string "(a b c)") =>  (A B C), 7Side Effects: None.
```
