<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function SHORT-SITE-NAME, LONG-SITE-NAME

### Syntax
`short-site-name <no arguments> => description`  
`long-site-name <no arguments> => description`  


### Arguments and Values
- **description** : a string or nil.   


### Description
short-site-name and long-site-name return a string that identifies the physical location of the computer hardware, or nil if no appropriate description can be produced.



### Examples
```lisp 
(short-site-name)
=>  "MIT AI Lab"
OR=>  "CMU-CSD"
 (long-site-name)
=>  "MIT Artificial Intelligence Laboratory"
OR=>  "CMU Computer Science Department"Side Effects: None.
```
