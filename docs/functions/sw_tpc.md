<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function SOFTWARE-TYPE, SOFTWARE-VERSION

### Syntax
`software-type <no arguments> => description`  
`software-version <no arguments> => description`  


### Arguments and Values
- **description** : a string or nil.   


### Description
software-type returns a string that identifies the generic name of any relevant supporting software, or nil if no appropriate or relevant result can be produced.  
software-version returns a string that identifies the version of any relevant supporting software, or nil if no appropriate or relevant result can be produced.



### Examples
```lisp 
(software-type) =>  "Multics"
 (software-version) =>  "1.3x"Side Effects: None.
```
