<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Special Operator LET, LET*

### Syntax
`let ({var | (var [init-form])}*) declaration* form* => result*`  
`let* ({var | (var [init-form])}*) declaration* form* => result*`  


### Arguments and Values
- **var** : a symbol.   
- **init-form** : a form.   
- **declaration** : a declare expression; not evaluated.   
- **form** : a form.   
- **results** : the values returned by the forms.   


### Description
let and let* create new variable bindings and execute a series of forms that use these bindings. let performs the bindings in parallel and let* does them sequentially.  
The form  
 (let ((var1 init-form-1)  
       (var2 init-form-2)  
       ...  
       (varm init-form-m))  
   declaration1  
   declaration2  
   ...  
   declarationp  
   form1  
   form2  
   ...  
   formn)  
let* is similar to let, but the bindings of variables are performed sequentially rather than in parallel. The expression for the init-form of a var can refer to vars previously bound in the let*.  
The form  
 (let* ((var1 init-form-1)  
        (var2 init-form-2)  
        ...  
        (varm init-form-m))  
   declaration1  
   declaration2  
   ...  
   declarationp  
   form1  
   form2  
   ...  
   formn)  
For both let and let*, if there is not an init-form associated with a var, var is initialized to nil.  
The special form let has the property that the scope of the name binding does not include any initial value form. For let*, a variable's scope also includes the remaining initial value forms for subsequent variable bindings.



### Examples
```lisp 
(setq a 'top) =>  TOP
 (defun dummy-function () a) =>  DUMMY-FUNCTION
 (let ((a 'inside) (b a))
    (format nil "~S ~S ~S" a b (dummy-function))) =>  "INSIDE TOP TOP" 
 (let* ((a 'inside) (b a))
    (format nil "~S ~S ~S" a b (dummy-function))) =>  "INSIDE INSIDE TOP" 
 (let ((a 'inside) (b a))
    (declare (special a))
    (format nil "~S ~S ~S" a b (dummy-function))) =>  "INSIDE TOP INSIDE"
The code
 (let (x)
   (declare (integer x))
   (setq x (gcd y z))
   ...)
```
