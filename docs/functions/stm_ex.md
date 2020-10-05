<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function STREAM-EXTERNAL-FORMAT

### Syntax
`stream-external-format stream => format`  


### Arguments and Values
- **stream** : a file stream.   
- **format** : an external file format.   


### Description
Returns an external file format designator for the stream.



### Examples
```lisp 
(with-open-file (stream "test" :direction :output)
   (stream-external-format stream))
=>  :DEFAULT
OR=>  :ISO8859/1-1987
OR=>  (:ASCII :SAIL)
OR=>  ACME::PROPRIETARY-FILE-FORMAT-17
OR=>  #<FILE-FORMAT :ISO646-1983 2343673>Side Effects: None.
```
