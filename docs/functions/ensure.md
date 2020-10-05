<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ENSURE-GENERIC-FUNCTION

### Syntax
`ensure-generic-function function-name &key argument-precedence-order declare documentation environment generic-function-class lambda-list method-class method-combination => generic-function`  


### Arguments and Values


### Description
The function ensure-generic-function is used to define a globally named generic function with no methods or to specify or modify options and declarations that pertain to a globally named generic function as a whole.  
If function-name is not fbound in the global environment, a new generic function is created. If  (fdefinition function-name)  is an ordinary function, a macro, or a special operator, an error is signaled.  
If function-name is a list, it must be of the form (setf symbol). If function-name specifies a generic function that has a different value for any of the following arguments, the generic function is modified to have the new value: :argument-precedence-order, :declare, :documentation, :method-combination.  
If function-name specifies a generic function that has a different value for the :lambda-list argument, and the new value is congruent with the lambda lists of all existing methods or there are no methods, the value is changed; otherwise an error is signaled.  
If function-name specifies a generic function that has a different value for the :generic-function-class argument and if the new generic function class is compatible with the old, change-class is called to change the class of the generic function; otherwise an error is signaled.  
If function-name specifies a generic function that has a different value for the :method-class argument, the value is changed, but any existing methods are not changed.Examples: None.



### Examples
No example  
