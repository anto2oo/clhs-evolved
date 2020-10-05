<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro STEP

### Syntax
`step form => result*`  


### Arguments and Values
- **form** : a form; evaluated as described below.   
- **results** : the values returned by the form.   


### Description
step implements a debugging paradigm wherein the programmer is allowed to step through the evaluation of a form. The specific nature of the interaction,  including which I/O streams are used and whether the stepping has lexical or dynamic scope,  is implementation-defined.  
 step evaluates form in the current environment. A call to step can be compiled, but it is acceptable for an implementation to interactively step through only those parts of the computation that are interpreted.  
 It is technically permissible for a conforming implementation to take no action at all other than normal execution of the form. In such a situation, (step form) is equivalent to, for example, (let () form). In implementations where this is the case, the associated documentation should mention that fact.Examples: None.



### Examples
No example  
