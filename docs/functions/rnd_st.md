<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function RANDOM-STATE-P

### Syntax
`random-state-p object => generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is of type random-state; otherwise, returns false.



### Examples
```lisp 
(random-state-p *random-state*) =>  true
 (random-state-p (make-random-state)) =>  true
 (random-state-p 'test-function) =>  falseSide Effects: None.
```
