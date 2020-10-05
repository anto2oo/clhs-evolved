<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Standard Generic Function NO-APPLICABLE-METHOD

### Syntax
`no-applicable-method generic-function &rest function-arguments => result*Method Signatures:`  
`no-applicable-method (generic-function t) &rest function-arguments`  


### Arguments and Values
- **generic-function** : a generic function on which no applicable method was found.   
- **function-arguments** : arguments to the generic-function.   
- **result** : an object.   


### Description
The generic function no-applicable-method is called when a generic function is invoked and no method on that generic function is applicable. The default method signals an error.  
The generic function no-applicable-method is not intended to be called by programmers. Programmers may write methods for it.Examples: None.



### Examples
No example  
