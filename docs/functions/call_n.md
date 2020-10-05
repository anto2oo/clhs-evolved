<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Local Function CALL-NEXT-METHOD

### Syntax
`call-next-method &rest args => result*`  


### Arguments and Values
- **arg** : an object.   
- **results** : the values returned by the method it calls.   


### Description
The function call-next-method can be used  within the body forms (but not the lambda list)  of a method defined by a method-defining form to call the next method.  
If there is no next method, the generic function no-next-method is called.  
The type of method combination used determines which methods can invoke call-next-method. The standard method combination type allows call-next-method to be used within primary methods and around methods. For generic functions using a type of method combination defined by the short form of define-method-combination, call-next-method can be used in around methods only.  
When call-next-method is called with no arguments, it passes the current method's original arguments to the next method. Neither argument defaulting, nor using setq, nor rebinding variables with the same names as parameters of the method affects the values call-next-method passes to the method it calls.  
 When call-next-method is called with arguments, the next method is called with those arguments.  
If call-next-method is called with arguments but omits optional arguments, the next method called defaults those arguments.  
The function call-next-method returns any values that are returned by the next method.  
The function call-next-method has lexical scope and indefinite extent and can only be used within the body of a method defined by a method-defining form.  
 Whether or not call-next-method is fbound in the global environment is implementation-dependent; however, the restrictions on redefinition and shadowing of call-next-method are the same as for symbols in the COMMON-LISP package which are fbound in the global environment. The consequences of attempting to use call-next-method outside of a method-defining form are undefined.Examples: None.



### Examples
No example  
