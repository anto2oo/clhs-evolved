<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function EQUAL

### Syntax
`equal x y => generalized-boolean`  


### Arguments and Values
- **x** : an object.   
- **y** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if x and y are structurally similar (isomorphic) objects. Objects are treated as follows by equal.  
 equal does not descend any objects other than the ones explicitly specified above. The next figure summarizes the information given in the previous list. In addition, the figure specifies the priority of the behavior of equal, with upper entries taking priority over lower ones.  
Type          Behavior                       
number        uses eql                       
character     uses eql                       
cons          descends                       
bit vector    descends                       
string        descends                       
pathname      ``functionally equivalent''    
structure     uses eq                        
Other array   uses eq                        
hash table    uses eq                        
Other object  uses eqFigure 5-12.  Summary and priorities of behavior of equal  
Any two objects that are eql are also equal.  
equal may fail to terminate if x or y is circular.



### Examples
```lisp 
(equal 'a 'b) =>  false
 (equal 'a 'a) =>  true
 (equal 3 3) =>  true
 (equal 3 3.0) =>  false
 (equal 3.0 3.0) =>  true
 (equal #c(3 -4) #c(3 -4)) =>  true
 (equal #c(3 -4.0) #c(3 -4)) =>  false
 (equal (cons 'a 'b) (cons 'a 'c)) =>  false
 (equal (cons 'a 'b) (cons 'a 'b)) =>  true
 (equal #\A #\A) =>  true
 (equal #\A #\a) =>  false
 (equal "Foo" "Foo") =>  true
 (equal "Foo" (copy-seq "Foo")) =>  true
 (equal "FOO" "foo") =>  false
 (equal "This-string" "This-string") =>  true
 (equal "This-string" "this-string") =>  falseSide Effects: None.
```
