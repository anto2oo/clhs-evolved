<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function HASH-TABLE-REHASH-SIZE

### Syntax
`hash-table-rehash-size hash-table => rehash-size`  


### Arguments and Values
- **hash-table** : a hash table.   
- **rehash-size** : a real of type (or (integer 1 *) (float (1.0) *)).   


### Description
Returns the current rehash size of hash-table, suitable for use in a call to make-hash-table in order to produce a hash table with state corresponding to the current state of the hash-table.



### Examples
```lisp 
(setq table (make-hash-table :size 100 :rehash-size 1.4))
=>  #<HASH-TABLE EQL 0/100 2556371>
 (hash-table-rehash-size table) =>  1.4Side Effects: None.
```
