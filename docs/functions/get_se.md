<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function GET-SETF-EXPANSION

### Syntax
`get-setf-expansion place &optional environment => vars, vals, store-vars, writer-form, reader-form`  


### Arguments and Values
- **place** : a place.   
- **environment** : an environment object.   
- **vars, vals, store-vars, writer-form, reader-form** : a setf expansion.   


### Description
Determines five values constituting the setf expansion for place in environment; see Section 5.1.1.2 (Setf Expansions).  
  If environment is not supplied or nil, the environment is the null lexical environment.



### Examples
```lisp 
(get-setf-expansion 'x)
=>  NIL, NIL, (#:G0001), (SETQ X #:G0001), X
;;; This macro is like POP 

 (defmacro xpop (place &environment env)
   (multiple-value-bind (dummies vals new setter getter)
                        (get-setf-expansion place env)
      `(let* (,@(mapcar #'list dummies vals) (,(car new) ,getter))
         (if (cdr new) (error "Can't expand this."))
         (prog1 (car ,(car new))
                (setq ,(car new) (cdr ,(car new)))
                ,setter))))
 
 (defsetf frob (x) (value) 
     `(setf (car ,x) ,value)) =>  FROB
;;; The following is an error; an error might be signaled at macro expansion time
 (flet ((frob (x) (cdr x)))  ;Invalid
   (xpop (frob z)))
```
