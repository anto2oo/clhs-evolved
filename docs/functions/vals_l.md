<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function VALUES-LIST

### Syntax
`values-list list => element*`  


### Arguments and Values
- **list** : a list.   
- **elements** : the elements of the list.   


### Description
Returns the elements of the list as multiple values[2].



### Examples
```lisp 
(values-list nil) =>  <no values>
 (values-list '(1)) =>  1
 (values-list '(1 2)) =>  1, 2
 (values-list '(1 2 3)) =>  1, 2, 3
```
