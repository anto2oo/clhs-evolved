<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ENDP

### Syntax
`endp list => generalized-boolean`  


### Arguments and Values
- **list** : a list,  which might be a dotted list or a circular list.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if list is the empty list. Returns false if list is a cons.



### Examples
```lisp 
(endp nil) =>  true
 (endp '(1 2)) =>  false
 (endp (cddr '(1 2))) =>  trueSide Effects: None.
```
