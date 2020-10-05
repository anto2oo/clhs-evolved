<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Standard Generic Function METHOD-QUALIFIERS

### Syntax
`method-qualifiers method => qualifiersMethod Signatures:`  
`method-qualifiers (method standard-method)`  


### Arguments and Values
- **method** : a method.   
- **qualifiers** : a proper list.   


### Description
Returns a list of the qualifiers of the method.



### Examples
```lisp 
(defmethod some-gf :before ((a integer)) a)
=>  #<STANDARD-METHOD SOME-GF (:BEFORE) (INTEGER) 42736540>
 (method-qualifiers *) =>  (:BEFORE)
```
