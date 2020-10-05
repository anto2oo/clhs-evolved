<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro MULTIPLE-VALUE-LIST

### Syntax
`multiple-value-list form => list`  


### Arguments and Values
- **form** : a form; evaluated as described below.   
- **list** : a list of the values returned by form.   


### Description
multiple-value-list evaluates form and creates a list of the multiple values[2] it returns.



### Examples
```lisp 
(multiple-value-list (floor -3 4)) =>  (-1 1)Side Effects: None.
```
