<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Accessor SYMBOL-PLIST

### Syntax
`symbol-plist symbol => plist`  
`(setf (symbol-plist symbol) new-plist)`  


### Arguments and Values
- **symbol** : a symbol.   
- **plist, new-plist** : a property list.   


### Description
Accesses the property list of symbol.



### Examples
```lisp 
(setq sym (gensym)) =>  #:G9723
 (symbol-plist sym) =>  ()
 (setf (get sym 'prop1) 'val1) =>  VAL1
 (symbol-plist sym) =>  (PROP1 VAL1)
 (setf (get sym 'prop2) 'val2) =>  VAL2
 (symbol-plist sym) =>  (PROP2 VAL2 PROP1 VAL1)
 (setf (symbol-plist sym) (list 'prop3 'val3)) =>  (PROP3 VAL3)
 (symbol-plist sym) =>  (PROP3 VAL3)Side Effects: None.
```
