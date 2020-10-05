<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function PATHNAME-MATCH-P

### Syntax
`pathname-match-p pathname wildcard => generalized-boolean`  


### Arguments and Values
- **pathname** : a pathname designator.   
- **wildcard** : a designator for a wild pathname.   
- **generalized-boolean** : a generalized boolean.   


### Description
pathname-match-p returns true if pathname matches wildcard, otherwise nil. The matching rules are implementation-defined but should be consistent with directory. Missing components of wildcard default to :wild.  
It is valid for pathname to be a wild pathname; a wildcard field in pathname only matches a wildcard field in wildcard (i.e., pathname-match-p is not commutative). It is valid for wildcard to be a non-wild pathname.Examples: None.



### Examples
No example  
