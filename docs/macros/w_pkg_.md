<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro WITH-PACKAGE-ITERATOR

### Syntax
`with-package-iterator (name package-list-form &rest symbol-types) declaration* form* => result*`  


### Arguments and Values
- **name** : a symbol.   
- **package-list-form** : a form; evaluated once to produce a package-list.   
- **package-list** : a designator for a list of package designators.   
- **symbol-type** : one of the symbols :internal, :external, or :inherited.   
- **declaration** : a declare expression; not evaluated.   
- **forms** : an implicit progn.   
- **results** : the values of the forms.   


### Description
Within the lexical scope of the body forms, the name is defined via macrolet such that successive invocations of (name) will return the symbols, one by one, from the packages in package-list.  
It is unspecified whether symbols inherited from multiple packages are returned more than once. The order of symbols returned does not necessarily reflect the order of packages in package-list. When package-list has more than one element, it is unspecified whether duplicate symbols are returned once or more than once.  
Symbol-types controls which symbols that are accessible in a package are returned as follows:  
When more than one argument is supplied for symbol-types, a symbol is returned if its accessibility matches any one of the symbol-types supplied. Implementations may extend this syntax by recognizing additional symbol accessibility types.  
An invocation of (name) returns four values as follows:  
After all symbols have been returned by successive invocations of (name), then only one value is returned, namely nil.  
The meaning of the second, third, and fourth values is that the returned symbol is accessible in the returned package in the way indicated by the second return value as follows:  
It is unspecified what happens if any of the implicit interior state of an iteration is returned outside the dynamic extent of the with-package-iterator form such as by returning some closure over the invocation form.  
Any number of invocations of with-package-iterator can be nested, and the body of the innermost one can invoke all of the locally established macros, provided all those macros have distinct names.



### Examples
```lisp 
The following function should return t on any package, and signal an error if the usage of with-package-iterator does not agree with the corresponding usage of do-symbols.
 (defun test-package-iterator (package)
   (unless (packagep package)
     (setq package (find-package package)))
   (let ((all-entries '())
         (generated-entries '()))
     (do-symbols (x package) 
       (multiple-value-bind (symbol accessibility) 
           (find-symbol (symbol-name x) package)
         (push (list symbol accessibility) all-entries)))
     (with-package-iterator (generator-fn package 
                             :internal :external :inherited)
       (loop     
         (multiple-value-bind (more? symbol accessibility pkg)
             (generator-fn)
           (unless more? (return))
           (let ((l (multiple-value-list (find-symbol (symbol-name symbol) 
                                                      package))))
             (unless (equal l (list symbol accessibility))
               (error "Symbol ~S not found as ~S in package ~A [~S]"
                      symbol accessibility (package-name package) l))
             (push l generated-entries)))))
     (unless (and (subsetp all-entries generated-entries :test #'equal)
                  (subsetp generated-entries all-entries :test #'equal))
      (error "Generated entries and Do-Symbols entries don't correspond"))
     t))
The following function prints out every present symbol (possibly more than once):
 (defun print-all-symbols () 
   (with-package-iterator (next-symbol (list-all-packages)
                           :internal :external)
     (loop
       (multiple-value-bind (more? symbol) (next-symbol)
         (if more? 
            (print symbol)
            (return))))))Side Effects: None.
```
