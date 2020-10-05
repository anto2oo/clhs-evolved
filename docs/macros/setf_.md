<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro SETF, PSETF

### Syntax
`setf {pair}* => result*`  
`psetf {pair}* => nil`  
`pair::= place newvalue`  


### Arguments and Values
- **place** : a place.   
- **newvalue** : a form.   
- **results** : the multiple values[2] returned by the storing form for the last place, or nil if there are no pairs.   


### Description
setf changes the value of place to be newvalue.  
(setf place newvalue) expands into an update form that stores the result of evaluating newvalue into the location referred to by place. Some place forms involve uses of accessors that take optional arguments. Whether those optional arguments are permitted by setf, or what their use is, is up to the setf expander function and is not under the control of setf. The documentation for any function that accepts &optional, &rest, or  ..... key arguments and that claims to be usable with setf must specify how those arguments are treated.  
If more than one pair is supplied, the pairs are processed sequentially; that is,  
 (setf place-1 newvalue-1  
       place-2 newvalue-2  
       ...  
       place-N newvalue-N)  
 (progn (setf place-1 newvalue-1)  
        (setf place-2 newvalue-2)  
        ...  
        (setf place-N newvalue-N))  
For detailed treatment of the expansion of setf and psetf, see Section 5.1.2 (Kinds of Places).



### Examples
```lisp 
(setq x (cons 'a 'b) y (list 1 2 3)) =>  (1 2 3) 
 (setf (car x) 'x (cadr y) (car x) (cdr x) y) =>  (1 X 3) 
 x =>  (X 1 X 3) 
 y =>  (1 X 3) 
 (setq x (cons 'a 'b) y (list 1 2 3)) =>  (1 2 3) 
 (psetf (car x) 'x (cadr y) (car x) (cdr x) y) =>  NIL 
 x =>  (X 1 A 3) 
 y =>  (1 A 3)
```
