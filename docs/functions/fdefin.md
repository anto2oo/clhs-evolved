<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Accessor FDEFINITION

### Syntax
`fdefinition function-name => definition`  
`(setf (fdefinition function-name) new-definition)`  


### Arguments and Values
- **function-name** : a function name.  In the non-setf case, the name must be fbound in the global environment.   
- **definition** : Current global function definition named by function-name.   
- **new-definition** : a function.   


### Description
fdefinition accesses the current global function definition named by function-name. The definition may be a function or may be an object representing a special form or macro.  The value returned by fdefinition when fboundp returns true but the function-name denotes a macro or special form is not well-defined, but fdefinition does not signal an error.Examples: None.Side Effects: None.



### Examples
No example  
