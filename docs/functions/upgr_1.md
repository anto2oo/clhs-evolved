<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function UPGRADED-ARRAY-ELEMENT-TYPE

### Syntax
`upgraded-array-element-type typespec &optional environment => upgraded-typespec`  


### Arguments and Values
- **typespec** : a type specifier.   
- **environment** : an environment object. The default is nil, denoting the null lexical environment and the current global environment.   
- **upgraded-typespec** : a type specifier.   


### Description
Returns the element type of the most specialized array representation capable of holding items of the type denoted by typespec.  
The typespec is a subtype of (and possibly type equivalent to) the upgraded-typespec.  
If typespec is bit, the result is type equivalent to bit.  If typespec is base-char, the result is type equivalent to base-char.  If typespec is character, the result is type equivalent to character.  
The purpose of upgraded-array-element-type is to reveal how an implementation does its upgrading.  
The environment is used to expand any derived type specifiers that are mentioned in the typespec.Examples: None.Side Effects: None.



### Examples
No example  
