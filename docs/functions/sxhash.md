<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function SXHASH

### Syntax
`sxhash object => hash-code`  


### Arguments and Values
- **object** : an object.   
- **hash-code** : a non-negative fixnum.   


### Description
sxhash returns a hash code for object.  
The manner in which the hash code is computed is implementation-dependent, but subject to certain constraints:



### Examples
```lisp 
(= (sxhash (list 'list "ab")) (sxhash (list 'list "ab"))) =>  true
 (= (sxhash "a") (sxhash (make-string 1 :initial-element #\a))) =>  true
 (let ((r (make-random-state)))
   (= (sxhash r) (sxhash (make-random-state r))))
=>  implementation-dependentSide Effects: None.
```
