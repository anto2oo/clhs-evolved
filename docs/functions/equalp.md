<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function EQUALP

### Syntax
`equalp x y => generalized-boolean`  


### Arguments and Values
- **x** : an object.   
- **y** : an object.   
- **generalized-boolean** : a generalized boolean.   


### Description
Returns true if x and y are equal, or if they have components that are of the same type as each other and if those components are equalp; specifically, equalp returns true in the following cases:  
 equalp does not descend any objects other than the ones explicitly specified above. The next figure summarizes the information given in the previous list. In addition, the figure specifies the priority of the behavior of equalp, with upper entries taking priority over lower ones.  
Type          Behavior                        
number        uses =                          
character     uses char-equal                 
cons          descends                        
bit vector    descends                        
string        descends                        
pathname      same as equal                   
structure     descends, as described above    
Other array   descends                        
hash table    descends, as described above    
Other object  uses eqFigure 5-13.  Summary and priorities of behavior of equalp



### Examples
```lisp 
(equalp 'a 'b) =>  false
 (equalp 'a 'a) =>  true
 (equalp 3 3) =>  true
 (equalp 3 3.0) =>  true
 (equalp 3.0 3.0) =>  true
 (equalp #c(3 -4) #c(3 -4)) =>  true
 (equalp #c(3 -4.0) #c(3 -4)) =>  true
 (equalp (cons 'a 'b) (cons 'a 'c)) =>  false
 (equalp (cons 'a 'b) (cons 'a 'b)) =>  true
 (equalp #\A #\A) =>  true
 (equalp #\A #\a) =>  true
 (equalp "Foo" "Foo") =>  true
 (equalp "Foo" (copy-seq "Foo")) =>  true
 (equalp "FOO" "foo") =>  true
 (setq array1 (make-array 6 :element-type 'integer
                            :initial-contents '(1 1 1 3 5 7))) 
=>  #(1 1 1 3 5 7)
 (setq array2 (make-array 8 :element-type 'integer
                            :initial-contents '(1 1 1 3 5 7 2 6)
                            :fill-pointer 6))
=>  #(1 1 1 3 5 7)
 (equalp array1 array2) =>  true
 (setq vector1 (vector 1 1 1 3 5 7)) =>  #(1 1 1 3 5 7)
 (equalp array1 vector1) =>  trueSide Effects: None.
```
