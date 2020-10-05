<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function COMPLEMENT

### Syntax
`complement function => complement-function`  


### Arguments and Values
- **function** : a function.   
- **complement-function** : a function.   


### Description
Returns a function that takes the same arguments as function, and has the same side-effect behavior as function, but returns only a single value: a generalized boolean with the opposite truth value of that which would be returned as the primary value of function. That is, when the function would have returned true as its primary value the complement-function returns false, and when the function would have returned false as its primary value the complement-function returns true.



### Examples
```lisp 
(funcall (complement #'zerop) 1) =>  true
 (funcall (complement #'characterp) #\A) =>  false
 (funcall (complement #'member) 'a '(a b c)) =>  false
 (funcall (complement #'member) 'd '(a b c)) =>  trueSide Effects: None.
```
