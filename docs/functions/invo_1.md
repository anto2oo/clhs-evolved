<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function INVOKE-RESTART

### Syntax
`invoke-restart restart &rest arguments => result*`  


### Arguments and Values
- **restart** : a restart designator.   
- **argument** : an object.   
- **results** : the values returned by the function associated with restart, if that function returns.   


### Description
Calls the function associated with restart, passing arguments to it. Restart must be valid in the current dynamic environment.



### Examples
```lisp 
(defun add3 (x) (check-type x number) (+ x 3))
 
 (foo 'seven)
>>  Error: The value SEVEN was not of type NUMBER.
>>  To continue, type :CONTINUE followed by an option number:
>>   1: Specify a different value to use.
>>   2: Return to Lisp Toplevel.
>>  Debug> (invoke-restart 'store-value 7)
=>  10Side Effects:
A non-local transfer of control might be done by the restart.
```
