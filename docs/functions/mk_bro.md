<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function MAKE-BROADCAST-STREAM

### Syntax
`make-broadcast-stream &rest streams => broadcast-stream`  


### Arguments and Values
- **stream** : an output stream.   
- **broadcast-stream** : a broadcast stream.   


### Description
Returns a broadcast stream.



### Examples
```lisp 
(setq a-stream (make-string-output-stream)
        b-stream (make-string-output-stream)) =>  #<String Output Stream>
 (format (make-broadcast-stream a-stream b-stream)
          "this will go to both streams") =>  NIL
 (get-output-stream-string a-stream) =>  "this will go to both streams"
 (get-output-stream-string b-stream) =>  "this will go to both streams"Side Effects: None.
```
