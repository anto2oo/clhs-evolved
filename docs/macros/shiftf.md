<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro SHIFTF

### Syntax
`shiftf place+ newvalue => old-value-1`  


### Arguments and Values
- **place** : a place.   
- **newvalue** : a form; evaluated.   
- **old-value-1** : an object (the old value of the first place).   


### Description
shiftf modifies the values of each place by storing newvalue into the last place, and shifting the values of the second through the last place into the remaining places.  
 If newvalue produces more values than there are store variables, the extra values are ignored. If newvalue produces fewer values than there are store variables, the missing values are set to nil.  
In the form (shiftf place1 place2 ... placen newvalue), the values in place1 through placen are read and saved, and newvalue is evaluated, for a total of n+1 values in all. Values 2 through n+1 are then stored into place1 through placen, respectively. It is as if all the places form a shift register; the newvalue is shifted in from the right, all values shift over to the left one place, and the value shifted out of place1 is returned.  
 For information about the evaluation of subforms of places, see Section 5.1.1.1 (Evaluation of Subforms to Places).



### Examples
```lisp 
(setq x (list 1 2 3) y 'trash) =>  TRASH
 (shiftf y x (cdr x) '(hi there)) =>  TRASH
 x =>  (2 3)
 y =>  (1 HI THERE)

 (setq x (list 'a 'b 'c)) =>  (A B C)
 (shiftf (cadr x) 'z) =>  B
 x =>  (A Z C)
 (shiftf (cadr x) (cddr x) 'q) =>  Z
 x =>  (A (C) . Q)
 (setq n 0) =>  0
 (setq x (list 'a 'b 'c 'd)) =>  (A B C D)
 (shiftf (nth (setq n (+ n 1)) x) 'z) =>  B
 x =>  (A Z C D)
```
