<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function GENTEMP

### Syntax
`gentemp &optional prefix package => new-symbol`  


### Arguments and Values
- **prefix** : a string. The default is "T".   
- **package** : a package designator. The default is the current package.   
- **new-symbol** : a fresh, interned symbol.   


### Description
gentemp creates and returns a fresh symbol, interned in the indicated package. The symbol is guaranteed to be one that was not previously accessible in package. It is neither bound nor fbound, and has a null property list.  
The name of the new-symbol is the concatenation of the prefix and a suffix, which is taken from an internal counter used only by gentemp. (If a symbol by that name is already accessible in package, the counter is incremented as many times as is necessary to produce a name that is not already the name of a symbol accessible in package.)



### Examples
```lisp 
(gentemp) =>  T1298
 (gentemp "FOO") =>  FOO1299
 (find-symbol "FOO1300") =>  NIL, NIL
 (gentemp "FOO") =>  FOO1300
 (find-symbol "FOO1300") =>  FOO1300, :INTERNAL
 (intern "FOO1301") =>  FOO1301, :INTERNAL
 (gentemp "FOO") =>  FOO1302
 (gentemp) =>  T1303Side Effects:
Its internal counter is incremented one or more times.
Interns the new-symbol in package.
```
