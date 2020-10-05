<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function SUBLIS, NSUBLIS

### Syntax
`sublis alist tree &key key test test-not => new-tree`  
`nsublis alist tree &key key test test-not => new-tree`  


### Arguments and Values
- **alist** : an association list.   
- **tree** : a tree.   
- **test** : a designator for a function of two arguments that returns a generalized boolean.   
- **test-not** : a designator for a function of two arguments that returns a generalized boolean.   
- **key** : a designator for a function of one argument, or nil.   
- **new-tree** : a tree.   


### Description
sublis makes substitutions for objects in tree (a structure of conses). nsublis is like sublis but destructively modifies the relevant parts of the tree.  
sublis looks at all subtrees and leaves of tree; if a subtree or leaf appears as a key in alist (that is, the key and the subtree or leaf satisfy the test), it is replaced by the object with which that key is associated. This operation is non-destructive. In effect, sublis can perform several subst operations simultaneously.  
If sublis succeeds, a new copy of tree is returned in which each occurrence of such a subtree or leaf is replaced by the object with which it is associated. If no changes are made, the original tree is returned. The original tree is left unchanged, but the result tree may share cells with it.  
nsublis is permitted to modify tree but otherwise returns the same values as sublis.



### Examples
```lisp 
(sublis '((x . 100) (z . zprime))
         '(plus x (minus g z x p) 4 . x))
=>  (PLUS 100 (MINUS G ZPRIME 100 P) 4 . 100)
 (sublis '(((+ x y) . (- x y)) ((- x y) . (+ x y)))
         '(* (/ (+ x y) (+ x p)) (- x y))
         :test #'equal)
=>  (* (/ (- X Y) (+ X P)) (+ X Y))
 (setq tree1 '(1 (1 2) ((1 2 3)) (((1 2 3 4)))))
=>  (1 (1 2) ((1 2 3)) (((1 2 3 4))))
 (sublis '((3 . "three")) tree1) 
=>  (1 (1 2) ((1 2 "three")) (((1 2 "three" 4))))
 (sublis '((t . "string"))
          (sublis '((1 . "") (4 . 44)) tree1)
          :key #'stringp)
=>  ("string" ("string" 2) (("string" 2 3)) ((("string" 2 3 44))))
 tree1 =>  (1 (1 2) ((1 2 3)) (((1 2 3 4))))
 (setq tree2 '("one" ("one" "two") (("one" "Two" "three"))))
=>  ("one" ("one" "two") (("one" "Two" "three"))) 
 (sublis '(("two" . 2)) tree2) 
=>  ("one" ("one" "two") (("one" "Two" "three"))) 
 tree2 =>  ("one" ("one" "two") (("one" "Two" "three"))) 
 (sublis '(("two" . 2)) tree2 :test 'equal) 
=>  ("one" ("one" 2) (("one" "Two" "three"))) 

 (nsublis '((t . 'temp))
           tree1
           :key #'(lambda (x) (or (atom x) (< (list-length x) 3))))
=>  ((QUOTE TEMP) (QUOTE TEMP) QUOTE TEMP)Side Effects:
nsublis modifies tree.
```
