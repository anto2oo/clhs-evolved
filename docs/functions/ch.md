<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function CHARACTER

### Syntax
`character character => denoted-character`  


### Arguments and Values
- **character** : a character designator.   
- **denoted-character** : a character.   


### Description
Returns the character denoted by the character designator.



### Examples
```lisp 
(character #\a) =>  #\a
 (character "a") =>  #\a
 (character 'a) =>  #\A
 (character '\a) =>  #\a
 (character 65.) is an error.
 (character 'apple) is an error.
```
