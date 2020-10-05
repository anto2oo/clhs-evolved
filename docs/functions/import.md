<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function IMPORT

### Syntax
`import symbols &optional package => t`  


### Arguments and Values
- **symbols** : a designator for a list of symbols.   
- **package** : a package designator.  The default is the current package.   


### Description
import adds symbol or symbols to the internals of package, checking for name conflicts with existing symbols either present in package or accessible to it. Once the symbols have been imported, they may be referenced in the importing package without the use of a package prefix when using the Lisp reader.  
A name conflict in import between the symbol being imported and a symbol inherited from some other package can be resolved in favor of the symbol being imported by making it a shadowing symbol, or in favor of the symbol already accessible by not doing the import. A name conflict in import with a symbol already present in the package may be resolved by uninterning that symbol, or by not doing the import.  
The imported symbol is not automatically exported from the current package, but if it is already present and external, then the fact that it is external is not changed.  If any symbol to be imported has no home package (i.e., (symbol-package symbol) =>  nil), import sets the home package of the symbol to package.  
If the symbol is already present in the importing package, import has no effect.



### Examples
```lisp 
(import 'common-lisp::car (make-package 'temp :use nil)) =>  T
 (find-symbol "CAR" 'temp) =>  CAR, :INTERNAL
 (find-symbol "CDR" 'temp) =>  NIL, NIL
The form (import 'editor:buffer) takes the external symbol named buffer in the EDITOR package (this symbol was located when the form was read by the Lisp reader) and adds it to the current package as an internal symbol. The symbol buffer is then present in the current package.Side Effects:
The package system is modified.
```
