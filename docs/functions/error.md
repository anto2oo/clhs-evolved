<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ERROR

### Syntax
`error datum &rest arguments =>|`  


### Arguments and Values
- **datum, arguments** : designators for a condition of default type simple-error.   


### Description
error effectively invokes signal on the denoted condition.  
If the condition is not handled, (invoke-debugger condition) is done. As a consequence of calling invoke-debugger, error cannot directly return; the only exit from error can come by non-local transfer of control in a handler or by use of an interactive debugging command.



### Examples
```lisp 
(defun factorial (x)
   (cond ((or (not (typep x 'integer)) (minusp x))
          (error "~S is not a valid argument to FACTORIAL." x))
         ((zerop x) 1)
         (t (* x (factorial (- x 1))))))
=>  FACTORIAL
(factorial 20)
=>  2432902008176640000
(factorial -1)
>>  Error: -1 is not a valid argument to FACTORIAL.
>>  To continue, type :CONTINUE followed by an option number:
>>   1: Return to Lisp Toplevel.
>>  Debug>
 (setq a 'fred)
=>  FRED
 (if (numberp a) (1+ a) (error "~S is not a number." A))
>>  Error: FRED is not a number.
>>  To continue, type :CONTINUE followed by an option number:
>>   1: Return to Lisp Toplevel.
>>  Debug> :Continue 1
>>  Return to Lisp Toplevel.
 
 (define-condition not-a-number (error) 
                   ((argument :reader not-a-number-argument :initarg :argument))
   (:report (lambda (condition stream)
              (format stream "~S is not a number."
                      (not-a-number-argument condition)))))
=>  NOT-A-NUMBER
 
 (if (numberp a) (1+ a) (error 'not-a-number :argument a))
>>  Error: FRED is not a number.
>>  To continue, type :CONTINUE followed by an option number:
>>   1: Return to Lisp Toplevel.
>>  Debug> :Continue 1
>>  Return to Lisp Toplevel.Side Effects:
Handlers for the specified condition, if any, are invoked and might have side effects. Program execution might stop, and the debugger might be entered.
```
