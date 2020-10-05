<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Local Macro PPRINT-EXIT-IF-LIST-EXHAUSTED

### Syntax
`pprint-exit-if-list-exhausted <no arguments> => nilArguments and Values: None.`  


### Arguments and Values


### Description
Tests whether or not the list passed to the lexically current logical block has been exhausted; see Section 22.2.1.1 (Dynamic Control of the Arrangement of Output). If this list has been reduced to nil, pprint-exit-if-list-exhausted terminates the execution of the lexically current logical block except for the printing of the suffix. Otherwise pprint-exit-if-list-exhausted returns nil.  
 Whether or not pprint-exit-if-list-exhausted is fbound in the global environment is implementation-dependent; however, the restrictions on redefinition and shadowing of pprint-exit-if-list-exhausted are the same as for symbols in the COMMON-LISP package which are fbound in the global environment. The consequences of attempting to use pprint-exit-if-list-exhausted outside of pprint-logical-block are undefined.Examples: None.Side Effects: None.



### Examples
No example  
