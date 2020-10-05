<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro WITH-SIMPLE-RESTART

### Syntax
`with-simple-restart (name format-control format-argument*) form* => result*`  


### Arguments and Values


### Description
with-simple-restart establishes a restart.  
If the restart designated by name is not invoked while executing forms, all values returned by the last of forms are returned. If the restart designated by name is invoked, control is transferred to with-simple-restart, which returns two values, nil and t.  
If name is nil, an anonymous restart is established.  
The format-control and format-arguments are used report the restart.



### Examples
```lisp 
(defun read-eval-print-loop (level)
   (with-simple-restart (abort "Exit command level ~D." level)
     (loop
       (with-simple-restart (abort "Return to command level ~D." level)
         (let ((form (prog2 (fresh-line) (read) (fresh-line))))
           (prin1 (eval form)))))))
=>  READ-EVAL-PRINT-LOOP
 (read-eval-print-loop 1)
 (+ 'a 3)
>>  Error: The argument, A, to the function + was of the wrong type.
>>         The function expected a number.
>>  To continue, type :CONTINUE followed by an option number:
>>   1: Specify a value to use this time.
>>   2: Return to command level 1.
>>   3: Exit command level 1.
>>   4: Return to Lisp Toplevel.
 (defun compute-fixnum-power-of-2 (x)
   (with-simple-restart (nil "Give up on computing 2^~D." x)
     (let ((result 1))
       (dotimes (i x result)
         (setq result (* 2 result))
         (unless (fixnump result)
           (error "Power of 2 is too large."))))))
COMPUTE-FIXNUM-POWER-OF-2
 (defun compute-power-of-2 (x)
   (or (compute-fixnum-power-of-2 x) 'something big))
COMPUTE-POWER-OF-2
 (compute-power-of-2 10)
1024
 (compute-power-of-2 10000)
>>  Error: Power of 2 is too large.
>>  To continue, type :CONTINUE followed by an option number.
>>   1: Give up on computing 2^10000.
>>   2: Return to Lisp Toplevel
>>  Debug> :continue 1
=>  SOMETHING-BIGSide Effects: None.
```
