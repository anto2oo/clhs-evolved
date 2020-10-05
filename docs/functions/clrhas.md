<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function CLRHASH

### Syntax
`clrhash hash-table => hash-table`  


### Arguments and Values
- **hash-table** : a hash table.   


### Description
Removes all entries from hash-table, and then returns that empty hash table.



### Examples
```lisp 
(setq table (make-hash-table)) =>  #<HASH-TABLE EQL 0/120 32004073>
 (dotimes (i 100) (setf (gethash i table) (format nil "~R" i))) =>  NIL
 (hash-table-count table) =>  100
 (gethash 57 table) =>  "fifty-seven", true
 (clrhash table) =>  #<HASH-TABLE EQL 0/120 32004073>
 (hash-table-count table) =>  0
 (gethash 57 table) =>  NIL, falseSide Effects:
The hash-table is modified.
```
