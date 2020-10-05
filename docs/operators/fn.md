<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Special Operator FUNCTION

### Syntax
`function name => function`  


### Arguments and Values
- **name** : a function name or lambda expression.   
- **function** : a function object.   


### Description
The value of function is the functional value of name in the current lexical environment.  
If name is a function name, the functional definition of that name is that established by the innermost lexically enclosing flet, labels, or macrolet form, if there is one. Otherwise the global functional definition of the function name is returned.  
If name is a lambda expression, then a lexical closure is returned. In situations where a closure over the same set of bindings might be produced more than once, the various resulting closures might or might not be eq.  
 It is an error to use function on a function name that does not denote a function in the lexical environment in which the function form appears. Specifically, it is an error to use function on a symbol that denotes a macro or special form. An implementation may choose not to signal this error for performance reasons, but implementations are forbidden from defining the failure to signal an error as a useful behavior.



### Examples
```lisp 
(defun adder (x) (function (lambda (y) (+ x y))))
 (setq add3 (adder 3))
 (funcall add3 5) =>  8Side Effects: None.
```
