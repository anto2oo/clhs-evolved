<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro RETURN

### Syntax
`return [result] =>|`  


### Arguments and Values
- **result** : a form; evaluated. The default is nil.   


### Description
Returns, as if by return-from, from the block named nil.



### Examples
```lisp 
(block nil (return) 1) =>  NIL
 (block nil (return 1) 2) =>  1
 (block nil (return (values 1 2)) 3) =>  1, 2
 (block nil (block alpha (return 1) 2)) =>  1
 (block alpha (block nil (return 1)) 2) =>  2
 (block nil (block nil (return 1) 2)) =>  1
```
