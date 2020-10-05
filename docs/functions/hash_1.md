<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function HASH-TABLE-COUNT

### Syntax
`hash-table-count hash-table => count`  


### Arguments and Values
- **hash-table** : a hash table.   
- **count** : a non-negative integer.   


### Description
Returns the number of entries in the hash-table. If hash-table has just been created or newly cleared (see clrhash) the entry count is 0.



### Examples
```lisp 
(setq table (make-hash-table)) =>  #<HASH-TABLE EQL 0/120 32115135>
 (hash-table-count table) =>  0
 (setf (gethash 57 table) "fifty-seven") =>  "fifty-seven"
 (hash-table-count table) =>  1
 (dotimes (i 100) (setf (gethash i table) i)) =>  NIL
 (hash-table-count table) =>  100Side Effects: None.
```
