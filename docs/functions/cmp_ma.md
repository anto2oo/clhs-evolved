<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Accessor COMPILER-MACRO-FUNCTION

### Syntax
`compiler-macro-function name &optional environment => function`  
`(setf (compiler-macro-function name &optional environment) new-function)`  


### Arguments and Values
- **name** : a function name.   
- **environment** : an environment object.   
- **function, new-function** : a compiler macro function, or nil.   


### Description
Accesses the compiler macro function named name, if any, in the environment.  
A value of nil denotes the absence of a compiler macro function named name.Examples: None.



### Examples
No example  
