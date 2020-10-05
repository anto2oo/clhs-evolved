<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function HASH-TABLE-P

### Syntax
`hash-table-p object => generalized-boolean`  


### Arguments and Values
- **object** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if object is of type hash-table; otherwise, returns false.



### Examples
```lisp 
(setq table (make-hash-table)) =>  #<HASH-TABLE EQL 0/120 32511220>
 (hash-table-p table) =>  true
 (hash-table-p 37) =>  false
 (hash-table-p '((a . 1) (b . 2))) =>  falseSide Effects: None.
```
