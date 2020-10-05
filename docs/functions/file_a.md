<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function FILE-AUTHOR

### Syntax
`file-author pathspec => author`  


### Arguments and Values
- **pathspec** : a pathname designator.   
- **author** : a string or nil.   


### Description
Returns a string naming the author of the file specified by pathspec, or nil if the author's name cannot be determined.



### Examples
```lisp 
(with-open-file (stream ">relativity>general.text")
   (file-author s))
=>  "albert"
```
