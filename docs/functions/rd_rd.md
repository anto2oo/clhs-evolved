<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function READ, READ-PRESERVING-WHITESPACE

### Syntax
`read &optional input-stream eof-error-p eof-value recursive-p => object`  
`read-preserving-whitespace &optional input-stream eof-error-p eof-value recursive-p => object`  


### Arguments and Values
- **input-stream** : an input stream designator.   
- **eof-error-p** : a generalized boolean. The default is true.   
- **eof-value** : an object.  The default is nil.   
- **recursive-p** : a generalized boolean. The default is false.   
- **object** : an object (parsed by the Lisp reader) or the eof-value.   


### Description
read parses the printed representation of an object from input-stream and builds such an object.  
read-preserving-whitespace is like read but preserves any whitespace[2] character that delimits the printed representation of the object. read-preserving-whitespace is exactly like read when the recursive-p argument to read-preserving-whitespace is true.  
When *read-suppress* is false, read throws away the delimiting character required by certain printed representations if it is a whitespace[2] character; but read preserves the character (using unread-char) if it is syntactically meaningful, because it could be the start of the next expression.  
If a file ends in a symbol or a number immediately followed by an end of file[1], read reads the symbol or number successfully; when called again, it sees the end of file[1] and only then acts according to eof-error-p. If a file contains ignorable text at the end, such as blank lines and comments, read does not consider it to end in the middle of an object.  
If recursive-p is true, the call to read is expected to be made from within some function that itself has been called from read or from a similar input function, rather than from the top level.  
 Both functions return the object read from input-stream. Eof-value is returned if eof-error-p is false and end of file is reached before the beginning of an object.



### Examples
```lisp 
(read)
>>  'a
=>  (QUOTE A)
 (with-input-from-string (is " ") (read is nil 'the-end)) =>  THE-END
 (defun skip-then-read-char (s c n)
    (if (char= c #\{) (read s t nil t) (read-preserving-whitespace s))
    (read-char-no-hang s)) =>  SKIP-THEN-READ-CHAR
 (let ((*readtable* (copy-readtable nil)))
    (set-dispatch-macro-character #\# #\{ #'skip-then-read-char)
    (set-dispatch-macro-character #\# #\} #'skip-then-read-char)
    (with-input-from-string (is "#{123 x #}123 y")
      (format t "~S ~S" (read is) (read is)))) =>  #\x, #\Space, NIL
As an example, consider this reader macro definition:
 (defun slash-reader (stream char)
   (declare (ignore char))
   `(path . ,(loop for dir = (read-preserving-whitespace stream t nil t)
                   then (progn (read-char stream t nil t)
                               (read-preserving-whitespace stream t nil t))
                   collect dir
                   while (eql (peek-char nil stream nil nil t) #\/))))
 (set-macro-character #\/ #'slash-reader)
Consider now calling read on this expression:
 (zyedh /usr/games/zork /usr/games/boggle)
 (zyedh (path usr games zork) (path usr games boggle))
 (zyedh (path usr games zork usr games boggle))
```
