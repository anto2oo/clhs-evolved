<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function COPY-READTABLE

### Syntax
`copy-readtable &optional from-readtable to-readtable => readtable`  


### Arguments and Values
- **from-readtable** : a readtable designator. The default is the current readtable.   
- **to-readtable** : a readtable or nil. The default is nil.   
- **readtable** : the to-readtable if it is non-nil, or else a fresh readtable.   


### Description
copy-readtable copies from-readtable.  
If to-readtable is nil, a new readtable is created and returned. Otherwise the readtable specified by to-readtable is modified and returned.  
 copy-readtable copies the setting of readtable-case.



### Examples
```lisp 
(setq zvar 123) =>  123
 (set-syntax-from-char #\z #\' (setq table2 (copy-readtable))) =>  T
 zvar =>  123
 (copy-readtable table2 *readtable*) =>  #<READTABLE 614000277>
 zvar =>  VAR
 (setq *readtable* (copy-readtable)) =>  #<READTABLE 46210223>
 zvar =>  VAR
 (setq *readtable* (copy-readtable nil)) =>  #<READTABLE 46302670>
 zvar =>  123
```
