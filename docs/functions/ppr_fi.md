<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function PPRINT-FILL, PPRINT-LINEAR, PPRINT-TABULAR

### Syntax
`pprint-fill stream object &optional colon-p at-sign-p => nil`  
`pprint-linear stream object &optional colon-p at-sign-p => nil`  
`pprint-tabular stream object &optional colon-p at-sign-p tabsize => nil`  


### Arguments and Values
- **stream** : an output stream designator.   
- **object** : an object.   
- **colon-p** : a generalized boolean. The default is true.   
- **at-sign-p** : a generalized boolean. The default is implementation-dependent.   
- **tabsize** : a non-negative integer. The default is 16.   


### Description
The functions pprint-fill, pprint-linear, and pprint-tabular specify particular ways of pretty printing a list to stream. Each function prints parentheses around the output if and only if colon-p is true. Each function ignores its at-sign-p argument. (Both arguments are included even though only one is needed so that these functions can be used via ~/.../ and as set-pprint-dispatch functions, as well as directly.) Each function handles abbreviation and the detection of circularity and sharing correctly, and uses write to print object when it is a non-list.  
 If object is a list and if the value of *print-pretty* is false, each of these functions prints object using a minimum of whitespace, as described in Section 22.1.3.5 (Printing Lists and Conses). Otherwise (if object is a list and if the value of *print-pretty* is true):



### Examples
```lisp 
Evaluating the following with a line length of 25 produces the output shown.
(progn (princ "Roads ") 
       (pprint-tabular *standard-output* '(elm main maple center) nil nil 8))
Roads ELM     MAIN
      MAPLE   CENTERSide Effects:
Performs output to the indicated stream.
```
