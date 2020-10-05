<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function METHOD-COMBINATION-ERROR

### Syntax
`method-combination-error format-control &rest args => implementation-dependent`  


### Arguments and Values
- **format-control** : a format control.   
- **args** : format arguments for format-control.   


### Description
The function method-combination-error is used to signal an error in method combination.  
The error message is constructed by using a format-control suitable for format and any args to it. Because an implementation may need to add additional contextual information to the error message, method-combination-error should be called only within the dynamic extent of a method combination function.  
Whether method-combination-error returns to its caller or exits via throw is implementation-dependent.Examples: None.Side Effects:  
The debugger might be entered.



### Examples
No example  
