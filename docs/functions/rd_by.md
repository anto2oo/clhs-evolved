<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function READ-BYTE

### Syntax
`read-byte stream &optional eof-error-p eof-value => byte`  


### Arguments and Values
- **stream** : a binary input stream.   
- **eof-error-p** : a generalized boolean. The default is true.   
- **eof-value** : an object. The default is nil.   
- **byte** : an integer, or the eof-value.   


### Description
read-byte reads and returns one byte from stream.  
If an end of file[2] occurs and eof-error-p is false, the eof-value is returned.



### Examples
```lisp 
(with-open-file (s "temp-bytes" 
                     :direction :output
                     :element-type 'unsigned-byte)
    (write-byte 101 s)) =>  101
 (with-open-file (s "temp-bytes" :element-type 'unsigned-byte)
    (format t "~S ~S" (read-byte s) (read-byte s nil 'eof)))
>>  101 EOF
=>  NILSide Effects:
Modifies stream.
```
