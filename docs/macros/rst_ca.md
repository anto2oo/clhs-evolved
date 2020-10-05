<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro RESTART-CASE

### Syntax
`restart-case restartable-form {clause} => result*`  
`clause::= (case-name lambda-list`  
`[[:interactive interactive-expression | :report report-expression | :test test-expression]]`  
`declaration* form*)`  


### Arguments and Values
- **restartable-form** : a form.   
- **case-name** : a symbol or nil.   
- **lambda-list** : an ordinary lambda list.   
- **interactive-expression** : a symbol or a lambda expression.   
- **report-expression** : a string, a symbol, or a lambda expression.   
- **test-expression** : a symbol or a lambda expression.   
- **declaration** : a declare expression; not evaluated.   
- **form** : a form.   
- **results** : the values resulting from the evaluation of restartable-form, or the values returned by the last form executed in a chosen clause, or nil.   


### Description
restart-case evaluates restartable-form in a dynamic environment where the clauses have special meanings as points to which control may be transferred. If restartable-form finishes executing and returns any values, all values returned are returned by restart-case and processing has completed. While restartable-form is executing, any code may transfer control to one of the clauses (see invoke-restart). If a transfer occurs, the forms in the body of that clause is evaluated and any values returned by the last such form are returned by restart-case. In this case, the dynamic state is unwound appropriately (so that the restarts established around the restartable-form are no longer active) prior to execution of the clause.  
 If there are no forms in a selected clause, restart-case returns nil.  
If case-name is a symbol, it names this restart.  
It is possible to have more than one clause use the same case-name. In this case, the first clause with that name is found by find-restart. The other clauses are accessible using compute-restarts.  
Each arglist is an ordinary lambda list to be bound during the execution of its corresponding forms. These parameters are used by the restart-case clause to receive any necessary data from a call to invoke-restart.  
By default, invoke-restart-interactively passes no arguments and all arguments must be optional in order to accomodate interactive restarting. However, the arguments need not be optional if the :interactive keyword has been used to inform invoke-restart-interactively about how to compute a proper argument list.  
Keyword options have the following meaning.  
 If a restart is invoked interactively but no :interactive option was supplied, the argument list used in the invocation is the empty list.  
If value is a string, it is a shorthand for  
 (lambda (stream) (write-string value stream))  
 If a named restart is asked to report but no report information has been supplied, the name of the restart is used in generating default report text.  
 When *print-escape* is nil, the printer uses the report information for a restart. For example, a debugger might announce the action of typing a ``continue'' command by:  
 (format t "~&~S -- ~A~%" ':continue some-restart)  
 :CONTINUE -- Return to command level  
The consequences are unspecified if an unnamed restart is specified but no :report option is provided.  
The default for this option is equivalent to (lambda (c) (declare (ignore c)) t).  
 If the restartable-form is a list whose car is any of the symbols signal, error, cerror, or warn (or is a macro form which macroexpands into such a list), then with-condition-restarts is used implicitly to associate the indicated restarts with the condition to be signaled.



### Examples
```lisp 
(restart-case
     (handler-bind ((error #'(lambda (c)
                             (declare (ignore condition))
                             (invoke-restart 'my-restart 7))))
       (error "Foo."))
   (my-restart (&optional v) v))
=>  7

 (define-condition food-error (error) ())
=>  FOOD-ERROR
 (define-condition bad-tasting-sundae (food-error) 
   ((ice-cream :initarg :ice-cream :reader bad-tasting-sundae-ice-cream)
    (sauce :initarg :sauce :reader bad-tasting-sundae-sauce)
    (topping :initarg :topping :reader bad-tasting-sundae-topping))
   (:report (lambda (condition stream)
              (format stream "Bad tasting sundae with ~S, ~S, and ~S"
                      (bad-tasting-sundae-ice-cream condition)
                      (bad-tasting-sundae-sauce condition)
                      (bad-tasting-sundae-topping condition)))))
=>  BAD-TASTING-SUNDAE
 (defun all-start-with-same-letter (symbol1 symbol2 symbol3)
   (let ((first-letter (char (symbol-name symbol1) 0)))
     (and (eql first-letter (char (symbol-name symbol2) 0))
          (eql first-letter (char (symbol-name symbol3) 0)))))
=>  ALL-START-WITH-SAME-LETTER
 (defun read-new-value ()
   (format t "Enter a new value: ")
   (multiple-value-list (eval (read))))
=>  READ-NEW-VALUE
 (defun verify-or-fix-perfect-sundae (ice-cream sauce topping)
   (do ()
      ((all-start-with-same-letter ice-cream sauce topping))
     (restart-case
       (error 'bad-tasting-sundae
              :ice-cream ice-cream
              :sauce sauce
              :topping topping)
       (use-new-ice-cream (new-ice-cream)
         :report "Use a new ice cream."
         :interactive read-new-value  
         (setq ice-cream new-ice-cream))
       (use-new-sauce (new-sauce)
         :report "Use a new sauce."
         :interactive read-new-value
         (setq sauce new-sauce))
       (use-new-topping (new-topping)
         :report "Use a new topping."
         :interactive read-new-value
         (setq topping new-topping))))
   (values ice-cream sauce topping))
=>  VERIFY-OR-FIX-PERFECT-SUNDAE
 (verify-or-fix-perfect-sundae 'vanilla 'caramel 'cherry)
>>  Error: Bad tasting sundae with VANILLA, CARAMEL, and CHERRY.
>>  To continue, type :CONTINUE followed by an option number:
>>   1: Use a new ice cream.
>>   2: Use a new sauce.
>>   3: Use a new topping.
>>   4: Return to Lisp Toplevel.
>>  Debug> :continue 1
>>  Use a new ice cream.
>>  Enter a new ice cream: 'chocolate
=>  CHOCOLATE, CARAMEL, CHERRYSide Effects: None.
```
