<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ARITHMETIC-ERROR-OPERANDS, ARITHMETIC-ERROR-OPERATION

### Syntax
`arithmetic-error-operands condition => operands`  
`arithmetic-error-operation condition => operation`  


### Arguments and Values
- **condition** : a condition of type arithmetic-error.   
- **operands** : a list.   
- **operation** : a function designator.   


### Description
arithmetic-error-operands returns a list of the operands which were used in the offending call to the operation that signaled the condition.  
arithmetic-error-operation returns a list of the offending operation in the offending call that signaled the condition.Examples: None.Side Effects: None.



### Examples
No example  
