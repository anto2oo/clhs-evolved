<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function WRITE-BYTE

### Syntax
`write-byte byte stream => byte`  


### Arguments and Values
- **byte** : an integer of the stream element type of stream.   
- **stream** : a binary output stream.   


### Description
write-byte writes one byte, byte, to stream.



### Examples
```lisp 
(with-open-file (s "temp-bytes" 
                    :direction :output
                    :element-type 'unsigned-byte)
    (write-byte 101 s)) =>  101Side Effects:
stream is modified.
```
