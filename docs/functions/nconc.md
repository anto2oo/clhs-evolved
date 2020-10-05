<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function NCONC

### Syntax
`nconc &rest lists => concatenated-list`  


### Arguments and Values
- **list** : each but the last must be a list (which might be a dotted list but must not be a circular list); the last list may be any object.   
- **concatenated-list** : a list.   


### Description
Returns a list that is the concatenation of lists. If no lists are supplied, (nconc) returns nil.  nconc is defined using the following recursive relationship:  
 (nconc) =>  ()  
 (nconc nil . lists) ==  (nconc . lists)  
 (nconc list) =>  list  
 (nconc list-1 list-2) ==  (progn (rplacd (last list-1) list-2) list-1)  
 (nconc list-1 list-2 . lists) ==  (nconc (nconc list-1 list-2) . lists)



### Examples
```lisp 
(nconc) =>  NIL
 (setq x '(a b c)) =>  (A B C)
 (setq y '(d e f)) =>  (D E F)
 (nconc x y) =>  (A B C D E F)
 x =>  (A B C D E F)
 (setq foo (list 'a 'b 'c 'd 'e)
       bar (list 'f 'g 'h 'i 'j)
       baz (list 'k 'l 'm)) =>  (K L M)
 (setq foo (nconc foo bar baz)) =>  (A B C D E F G H I J K L M)
 foo =>  (A B C D E F G H I J K L M)
 bar =>  (F G H I J K L M)
 baz =>  (K L M)

 (setq foo (list 'a 'b 'c 'd 'e)
       bar (list 'f 'g 'h 'i 'j)
       baz (list 'k 'l 'm)) =>  (K L M)
 (setq foo (nconc nil foo bar nil baz)) =>  (A B C D E F G H I J K L M) 
 foo =>  (A B C D E F G H I J K L M)
 bar =>  (F G H I J K L M)
 baz =>  (K L M)Side Effects:
The lists are modified rather than copied.
```
