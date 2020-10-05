<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function PROBE-FILE

### Syntax
`probe-file pathspec => truename`  


### Arguments and Values
- **pathspec** : a pathname designator.   
- **truename** : a physical pathname or nil.   


### Description
probe-file tests whether a file exists.  
probe-file returns false if there is no file named pathspec, and otherwise returns the truename of pathspec.  
If the pathspec designator is an open stream, then probe-file produces the truename of its associated file.  If pathspec is a stream, whether open or closed, it is coerced to a pathname as if by the function pathname.Examples: None.



### Examples
No example  
