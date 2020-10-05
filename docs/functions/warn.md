<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function WARN

### Syntax
`warn datum &rest arguments => nil`  


### Arguments and Values
- **datum, arguments** : designators for a condition of default type simple-warning.   


### Description
Signals a condition of type warning. If the condition is not handled, reports the condition to error output.  
The precise mechanism for warning is as follows:



### Examples
```lisp 
(defun foo (x)
    (let ((result (* x 2)))
      (if (not (typep result 'fixnum))
          (warn "You're using very big numbers."))
      result))
=>  FOO
 
  (foo 3)
=>  6
 
  (foo most-positive-fixnum)
>>  Warning: You're using very big numbers.
=>  4294967294
 
  (setq *break-on-signals* t)
=>  T
 
  (foo most-positive-fixnum)
>>  Break: Caveat emptor.
>>  To continue, type :CONTINUE followed by an option number.
>>   1: Return from Break.
>>   2: Abort to Lisp Toplevel.
>>  Debug> :continue 1
>>  Warning: You're using very big numbers.
=>  4294967294Side Effects:
A warning is issued. The debugger might be entered.
```
