<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function EVAL

### Syntax
`eval form => result*`  


### Arguments and Values
- **form** : a form.   
- **results** : the values yielded by the evaluation of form.   


### Description
Evaluates form in the current dynamic environment and the null lexical environment.  
eval is a user interface to the evaluator.  
The evaluator expands macro calls as if through the use of macroexpand-1.  
 Constants appearing in code processed by eval are not copied nor coalesced. The code resulting from the execution of eval references objects that are eql to the corresponding objects in the source code.



### Examples
```lisp 
(setq form '(1+ a) a 999) =>  999
 (eval form) =>  1000
 (eval 'form) =>  (1+ A)
 (let ((a '(this would break if eval used local value))) (eval form))
=>  1000
```
