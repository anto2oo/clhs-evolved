<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function CONSTANTP

### Syntax
`constantp form &optional environment => generalized-boolean`  


### Arguments and Values
- **form** : a form.   
- **environment** : an environment object. The default is nil.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if form can be determined by the implementation to be a constant form in the indicated environment; otherwise, it returns false indicating either that the form is not a constant form or that it cannot be determined whether or not form is a constant form.  
The following kinds of forms are considered constant forms:  
If an implementation chooses to make use of the environment information, such actions as expanding macros or performing function inlining are permitted to be used, but not required; however, expanding compiler macros is not permitted.



### Examples
```lisp 
(constantp 1) =>  true
 (constantp 'temp) =>  false
 (constantp ''temp)) =>  true
 (defconstant this-is-a-constant 'never-changing) =>  THIS-IS-A-CONSTANT 
 (constantp 'this-is-a-constant) =>  true
 (constantp "temp") =>  true
 (setq a 6) =>  6 
 (constantp a) =>  true
 (constantp '(sin pi)) =>  implementation-dependent
 (constantp '(car '(x))) =>  implementation-dependent
 (constantp '(eql x x)) =>  implementation-dependent
 (constantp '(typep x 'nil)) =>  implementation-dependent
 (constantp '(typep x 't)) =>  implementation-dependent
 (constantp '(values this-is-a-constant)) =>  implementation-dependent
 (constantp '(values 'x 'y)) =>  implementation-dependent
 (constantp '(let ((a '(a b c))) (+ (length a) 6))) =>  implementation-dependentSide Effects: None.
```
