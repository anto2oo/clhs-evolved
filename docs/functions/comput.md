<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Standard Generic Function COMPUTE-APPLICABLE-METHODS

### Syntax
`compute-applicable-methods generic-function function-arguments => methodsMethod Signatures:`  
`compute-applicable-methods (generic-function standard-generic-function)`  


### Arguments and Values
- **generic-function** : a generic function.   
- **function-arguments** : a list of arguments for the generic-function.   
- **methods** : a list of method objects.   


### Description
Given a generic-function and a set of function-arguments, the function compute-applicable-methods returns the set of methods that are applicable for those arguments sorted according to precedence order. See Section 7.6.6 (Method Selection and Combination).



### Examples
No example  
