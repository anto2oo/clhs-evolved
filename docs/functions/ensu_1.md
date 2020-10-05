<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ENSURE-DIRECTORIES-EXIST

### Syntax
`ensure-directories-exist pathspec &key verbose => pathspec, created`  


### Arguments and Values
- **pathspec** : a pathname designator.   
- **verbose** : a generalized boolean.   
- **created** : a generalized boolean.   


### Description
Tests whether the directories containing the specified file actually exist, and attempts to create them if they do not.  
If the containing directories do not exist and if verbose is true, then the implementation is permitted (but not required) to perform output to standard output saying what directories were created. If the containing directories exist, or if verbose is false, this function performs no output.  
The primary value is the given pathspec so that this operation can be straightforwardly composed with other file manipulation expressions. The secondary value, created, is true if any directories were created.Examples: None.



### Examples
No example  
