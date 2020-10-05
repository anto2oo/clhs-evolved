<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Accessor MACRO-FUNCTION

### Syntax
`macro-function symbol &optional environment => function`  
`(setf (macro-function symbol &optional environment) new-function)`  


### Arguments and Values
- **symbol** : a symbol.   
- **environment** : an environment object.   
- **function** : a macro function or nil.   
- **new-function** : a macro function.   


### Description
Determines whether symbol has a function definition as a macro in the specified environment.  
If so, the macro expansion function, a function of two arguments, is returned. If symbol has no function definition in the lexical environment environment, or its definition is not a macro, macro-function returns nil.  
It is possible for both macro-function and  special-operator-p  to return true of symbol. The macro definition must be available for use by programs that understand only the standard Common Lisp special forms.



### Examples
```lisp 
(defmacro macfun (x) '(macro-function 'macfun)) =>  MACFUN 
 (not (macro-function 'macfun)) =>  false
 (macrolet ((foo (&environment env)
               (if (macro-function 'bar env)
                  ''yes
                  ''no)))
    (list (foo)
          (macrolet ((bar () :beep))
             (foo))))
 
=>  (NO YES)
```
