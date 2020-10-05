<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function CHAR=, CHAR/=, CHAR<, CHAR>, CHAR<=, CHAR>=, CHAR-EQUAL, CHAR-NOT-EQUAL, CHAR-LESSP, CHAR-GREATERP, CHAR-NOT-GREATERP, CHAR-NOT-LESSP

### Syntax
`char= &rest characters+ => generalized-boolean`  
`char/= &rest characters+ => generalized-boolean`  
`char< &rest characters+ => generalized-boolean`  
`char> &rest characters+ => generalized-boolean`  
`char<= &rest characters+ => generalized-boolean`  
`char>= &rest characters+ => generalized-boolean`  
`char-equal &rest characters+ => generalized-boolean`  
`char-not-equal &rest characters+ => generalized-boolean`  
`char-lessp &rest characters+ => generalized-boolean`  
`char-greaterp &rest characters+ => generalized-boolean`  
`char-not-greaterp &rest characters+ => generalized-boolean`  
`char-not-lessp &rest characters+ => generalized-boolean`  


### Arguments and Values
- **character** : a character.   
- **generalized-boolean** : a generalized boolean.   


### Description
These predicates compare characters.  
char= returns true if all characters are the same; otherwise, it returns false.  If two characters differ in any implementation-defined attributes, then they are not char=.  
char/= returns true if all characters are different; otherwise, it returns false.  
char< returns true if the characters are monotonically increasing; otherwise, it returns false.  If two characters have identical implementation-defined attributes, then their ordering by char< is consistent with the numerical ordering by the predicate < on their codes.  
char> returns true if the characters are monotonically decreasing; otherwise, it returns false.  If two characters have identical implementation-defined attributes, then their ordering by char> is consistent with the numerical ordering by the predicate > on their codes.  
char<= returns true if the characters are monotonically nondecreasing; otherwise, it returns false.  If two characters have identical implementation-defined attributes, then their ordering by char<= is consistent with the numerical ordering by the predicate <= on their codes.  
char>= returns true if the characters are monotonically nonincreasing; otherwise, it returns false.  If two characters have identical implementation-defined attributes, then their ordering by char>= is consistent with the numerical ordering by the predicate >= on their codes.  
 char-equal, char-not-equal, char-lessp, char-greaterp, char-not-greaterp, and char-not-lessp are similar to char=, char/=, char<, char>, char<=, char>=, respectively, except that they ignore differences in case and  might have an implementation-defined behavior for non-simple characters. For example, an implementation might define that char-equal, etc. ignore certain implementation-defined attributes. The effect, if any, of each implementation-defined attribute upon these functions must be specified as part of the definition of that attribute.



### Examples
```lisp 
(char= #\d #\d) =>  true
 (char= #\A #\a) =>  false
 (char= #\d #\x) =>  false
 (char= #\d #\D) =>  false
 (char/= #\d #\d) =>  false
 (char/= #\d #\x) =>  true
 (char/= #\d #\D) =>  true
 (char= #\d #\d #\d #\d) =>  true
 (char/= #\d #\d #\d #\d) =>  false
 (char= #\d #\d #\x #\d) =>  false
 (char/= #\d #\d #\x #\d) =>  false
 (char= #\d #\y #\x #\c) =>  false
 (char/= #\d #\y #\x #\c) =>  true
 (char= #\d #\c #\d) =>  false
 (char/= #\d #\c #\d) =>  false
 (char< #\d #\x) =>  true
 (char<= #\d #\x) =>  true
 (char< #\d #\d) =>  false
 (char<= #\d #\d) =>  true
 (char< #\a #\e #\y #\z) =>  true
 (char<= #\a #\e #\y #\z) =>  true
 (char< #\a #\e #\e #\y) =>  false
 (char<= #\a #\e #\e #\y) =>  true
 (char> #\e #\d) =>  true
 (char>= #\e #\d) =>  true
 (char> #\d #\c #\b #\a) =>  true
 (char>= #\d #\c #\b #\a) =>  true
 (char> #\d #\d #\c #\a) =>  false
 (char>= #\d #\d #\c #\a) =>  true
 (char> #\e #\d #\b #\c #\a) =>  false
 (char>= #\e #\d #\b #\c #\a) =>  false
 (char> #\z #\A) =>  implementation-dependent
 (char> #\Z #\a) =>  implementation-dependent
 (char-equal #\A #\a) =>  true
 (stable-sort (list #\b #\A #\B #\a #\c #\C) #'char-lessp)
=>  (#\A #\a #\b #\B #\c #\C)
 (stable-sort (list #\b #\A #\B #\a #\c #\C) #'char<)
=>  (#\A #\B #\C #\a #\b #\c) ;Implementation A
=>  (#\a #\b #\c #\A #\B #\C) ;Implementation B
=>  (#\a #\A #\b #\B #\c #\C) ;Implementation C
=>  (#\A #\a #\B #\b #\C #\c) ;Implementation D
=>  (#\A #\B #\a #\b #\C #\c) ;Implementation E
```
