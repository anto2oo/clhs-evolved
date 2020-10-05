<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function LOAD-LOGICAL-PATHNAME-TRANSLATIONS

### Syntax
`load-logical-pathname-translations host => just-loaded`  


### Arguments and Values
- **host** : a string.   
- **just-loaded** : a generalized boolean.   


### Description
Searches for and loads the definition of a logical host named host, if it is not already defined. The specific nature of the search is implementation-defined.  
If the host is already defined, no attempt to find or load a definition is attempted, and false is returned. If the host is not already defined, but a definition is successfully found and loaded, true is returned. Otherwise, an error is signaled.



### Examples
```lisp 
(translate-logical-pathname "hacks:weather;barometer.lisp.newest")
>>  Error: The logical host HACKS is not defined.
 (load-logical-pathname-translations "HACKS")
>>  ;; Loading SYS:SITE;HACKS.TRANSLATIONS
>>  ;; Loading done.
=>  true
 (translate-logical-pathname "hacks:weather;barometer.lisp.newest")
=>  #P"HELIUM:[SHARED.HACKS.WEATHER]BAROMETER.LSP;0"
 (load-logical-pathname-translations "HACKS")
=>  false
```
