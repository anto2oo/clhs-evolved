<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function INPUT-STREAM-P, OUTPUT-STREAM-P

### Syntax
`input-stream-p stream => generalized-boolean`  
`output-stream-p stream => generalized-boolean`  


### Arguments and Values
- **stream** : a stream.   
- **generalized-boolean** : a generalized boolean.   


### Description
input-stream-p returns true if stream is an input stream; otherwise, returns false.  
output-stream-p returns true if stream is an output stream; otherwise, returns false.



### Examples
```lisp 
(input-stream-p *standard-input*) =>  true
 (input-stream-p *terminal-io*) =>  true
 (input-stream-p (make-string-output-stream)) =>  false

 (output-stream-p *standard-output*) =>  true
 (output-stream-p *terminal-io*) =>  true
 (output-stream-p (make-string-input-stream "jr")) =>  falseSide Effects: None.
```
