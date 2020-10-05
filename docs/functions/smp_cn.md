<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function SIMPLE-CONDITION-FORMAT-CONTROL, SIMPLE-CONDITION-FORMAT-ARGUMENTS

### Syntax
`simple-condition-format-control condition => format-control`  
`simple-condition-format-arguments condition => format-arguments`  


### Arguments and Values
- **condition** : a condition of type simple-condition.   
- **format-control** : a format control.   
- **format-arguments** : a list.   


### Description
simple-condition-format-control returns the format control needed to process the condition's format arguments.  
simple-condition-format-arguments returns a list of format arguments needed to process the condition's format control.



### Examples
```lisp 
(setq foo (make-condition 'simple-condition
                          :format-control "Hi ~S"
                          :format-arguments '(ho)))
=>  #<SIMPLE-CONDITION 26223553>
 (apply #'format nil (simple-condition-format-control foo)
                     (simple-condition-format-arguments foo))
=>  "Hi HO"Side Effects: None.
```
