<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro RESTART-BIND

### Syntax
`restart-bind ({(name function {key-val-pair}*)}) form* => result*`  
`key-val-pair::= :interactive-function interactive-function |`  
`:report-function report-function |`  
`:test-function test-function`  


### Arguments and Values
- **name** : a symbol; not evaluated.   
- **function** : a form; evaluated.   
- **forms** : an implicit progn.   
- **interactive-function** : a form; evaluated.   
- **report-function** : a form; evaluated.   
- **test-function** : a form; evaluated.   
- **results** : the values returned by the forms.   


### Description
restart-bind executes the body of forms in a dynamic environment where restarts with the given names are in effect.  
If a name is nil, it indicates an anonymous restart; if a name is a non-nil symbol, it indicates a named restart.  
The function, interactive-function, and report-function are unconditionally evaluated in the current lexical and dynamic environment prior to evaluation of the body. Each of these forms must evaluate to a function.  
If invoke-restart is done on that restart, the function which resulted from evaluating function is called, in the dynamic environment of the invoke-restart, with the arguments given to invoke-restart. The function may either perform a non-local transfer of control or may return normally.  
If the restart is invoked interactively from the debugger (using invoke-restart-interactively), the arguments are defaulted by calling the function which resulted from evaluating interactive-function. That function may optionally prompt interactively on query I/O, and should return a list of arguments to be used by invoke-restart-interactively when invoking the restart.  
If a restart is invoked interactively but no interactive-function is used, then an argument list of nil is used. In that case, the function must be compatible with an empty argument list.  
If the restart is presented interactively (e.g., by the debugger), the presentation is done by calling the function which resulted from evaluating report-function. This function must be a function of one argument, a stream. It is expected to print a description of the action that the restart takes to that stream. This function is called any time the restart is printed while *print-escape* is nil.  
In the case of interactive invocation, the result is dependent on the value of :interactive-function as follows.Side Effects: None.



### Examples
No example  
