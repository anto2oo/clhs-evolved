<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function RPLACA, RPLACD

### Syntax
`rplaca cons object => cons`  
`rplacd cons object => consPronunciation:`  
`rplaca: [,ree'plakuh] or [,ruh'plakuh]`  
`rplacd: [,ree'plakduh] or [,ruh'plakduh] or [,ree'plakdee] or [,ruh'plakdee]`  


### Arguments and Values
- **cons** : a cons.   
- **object** : an object.   


### Description
rplaca replaces the car of the cons with object.  
rplacd replaces the cdr of the cons with object.



### Examples
```lisp 
(defparameter *some-list* (list* 'one 'two 'three 'four)) =>  *some-list*
 *some-list* =>  (ONE TWO THREE . FOUR)
 (rplaca *some-list* 'uno) =>  (UNO TWO THREE . FOUR)
 *some-list* =>  (UNO TWO THREE . FOUR)
 (rplacd (last *some-list*) (list 'IV)) =>  (THREE IV)
 *some-list* =>  (UNO TWO THREE IV)Side Effects:
The cons is modified.
```
