<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function DIRECTORY

### Syntax
`directory pathspec &key => pathnames`  


### Arguments and Values
- **pathspec** : a pathname designator, which may contain wild components.   
- **pathnames** : a list of  physical pathnames.   


### Description
Determines which, if any, files that are present in the file system have names matching pathspec, and returns a  fresh  list of pathnames corresponding to the truenames of those files.  
An implementation may be extended to accept implementation-defined keyword arguments to directory.Examples: None.



### Examples
No example  
