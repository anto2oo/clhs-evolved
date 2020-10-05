<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function FIND-RESTART

### Syntax
`find-restart identifier &optional condition`  
`restart`  


### Arguments and Values
- **identifier** : a non-nil symbol, or a restart.   
- **condition** : a condition object, or nil.   
- **restart** : a restart or nil.   


### Description
find-restart searches for a particular restart in the current dynamic environment.  
 When condition is non-nil, only those restarts are considered that are either explicitly associated with that condition, or not associated with any condition; that is, the excluded restarts are those that are associated with a non-empty set of conditions of which the given condition is not an element. If condition is nil, all restarts are considered.  
If identifier is a symbol, then the innermost (most recently established) applicable restart with that name is returned. nil is returned if no such restart is found.  
If identifier is a currently active restart, then it is returned. Otherwise, nil is returned.



### Examples
```lisp 
(restart-case
     (let ((r (find-restart 'my-restart)))
       (format t "~S is named ~S" r (restart-name r)))
   (my-restart () nil))
>>  #<RESTART 32307325> is named MY-RESTART
=>  NIL
 (find-restart 'my-restart)
=>  NILSide Effects: None.
```
