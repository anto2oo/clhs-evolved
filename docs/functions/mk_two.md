<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function MAKE-TWO-WAY-STREAM

### Syntax
`make-two-way-stream input-stream output-stream => two-way-stream`  


### Arguments and Values
- **input-stream** : a stream.   
- **output-stream** : a stream.   
- **two-way-stream** : a two-way stream.   


### Description
Returns a two-way stream that gets its input from input-stream and sends its output to output-stream.



### Examples
```lisp 
(with-output-to-string (out)
    (with-input-from-string (in "input...")
      (let ((two (make-two-way-stream in out)))
        (format two "output...")
        (setq what-is-read (read two))))) =>  "output..."
 what-is-read =>  INPUT...Side Effects: None.
```
