<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function PROCLAIM

### Syntax
`proclaim declaration-specifier => implementation-dependent`  


### Arguments and Values
- **declaration-specifier** : a declaration specifier.   


### Description
Establishes the declaration specified by declaration-specifier in the global environment.  
Such a declaration, sometimes called a global declaration or a proclamation, is always in force unless locally shadowed.  
Names of variables and functions within declaration-specifier refer to dynamic variables and global function definitions, respectively.  
The next figure shows a list of declaration identifiers that can be used with proclaim.  
declaration  inline     optimize  type    
ftype        notinline  specialFigure 3-22.  Global Declaration Specifiers  
An implementation is free to support other (implementation-defined) declaration identifiers as well.



### Examples
```lisp 
(defun declare-variable-types-globally (type vars)
   (proclaim `(type ,type ,@vars))
   type)

 ;; Once this form is executed, the dynamic variable *TOLERANCE*
 ;; must always contain a float.
 (declare-variable-types-globally 'float '(*tolerance*))
=>  FLOAT
```
