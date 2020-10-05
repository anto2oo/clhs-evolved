<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function BREAK

### Syntax
`break &optional format-control &rest format-arguments => nil`  


### Arguments and Values
- **format-control** : a format control.  The default is implementation-dependent.   
- **format-arguments** : format arguments for the format-control.   


### Description
break formats format-control and format-arguments and then goes directly into the debugger without allowing any possibility of interception by programmed error-handling facilities.  
If the continue restart is used while in the debugger, break immediately returns nil without taking any unusual recovery action.  
 break binds *debugger-hook* to nil before attempting to enter the debugger.



### Examples
```lisp 
(break "You got here with arguments: ~:S." '(FOO 37 A))
>>  BREAK: You got here with these arguments: FOO, 37, A.
>>  To continue, type :CONTINUE followed by an option number:
>>   1: Return from BREAK.
>>   2: Top level.
>>  Debug> :CONTINUE 1
>>  Return from BREAK.
=>  NILSide Effects:
The debugger is entered.
```
