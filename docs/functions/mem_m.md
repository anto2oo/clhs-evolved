<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function MEMBER, MEMBER-IF, MEMBER-IF-NOT

### Syntax
`member item list &key key test test-not => tail`  
`member-if predicate list &key key => tail`  
`member-if-not predicate list &key key => tail`  


### Arguments and Values
- **item** : an object.   
- **list** : a proper list.   
- **predicate** : a designator for a function of one argument that returns a generalized boolean.   
- **test** : a designator for a function of two arguments that returns a generalized boolean.   
- **test-not** : a designator for a function of two arguments that returns a generalized boolean.   
- **key** : a designator for a function of one argument, or nil.   
- **tail** : a list.   


### Description
member, member-if, and member-if-not each search list for item or for a top-level element that satisfies the test. The argument to the predicate function is an element of list.  
If some element satisfies the test, the tail of list beginning with this element is returned; otherwise nil is returned.  
list is searched on the top level only.



### Examples
```lisp 
(member 2 '(1 2 3)) =>  (2 3)                                 
 (member 2 '((1 . 2) (3 . 4)) :test-not #'= :key #'cdr) =>  ((3 . 4))
 (member 'e '(a b c d)) =>  NIL
 (member-if #'listp '(a b nil c d)) =>  (NIL C D)
 (member-if #'numberp '(a #\Space 5/3 foo)) =>  (5/3 FOO)
 (member-if-not #'zerop 
                 '(3 6 9 11 . 12)
                 :key #'(lambda (x) (mod x 3))) =>  (11 . 12)Side Effects: None.
```
