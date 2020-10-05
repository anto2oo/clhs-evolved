<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro POP

### Syntax
`pop place => element`  


### Arguments and Values
- **place** : a place, the value of which is a list (possibly, but necessarily, a dotted list or circular list).   
- **element** : an object (the car of the contents of place).   


### Description
pop reads the value of place, remembers the car of the list which was retrieved, writes the cdr of the list back into the place, and finally yields the car of the originally retrieved list.  
 For information about the evaluation of subforms of place, see Section 5.1.1.1 (Evaluation of Subforms to Places).



### Examples
```lisp 
(setq stack '(a b c)) =>  (A B C)
 (pop stack) =>  A  
 stack =>  (B C)
 (setq llst '((1 2 3 4))) =>  ((1 2 3 4))
 (pop (car llst)) =>  1
 llst =>  ((2 3 4))Side Effects:
The contents of place are modified.
```
