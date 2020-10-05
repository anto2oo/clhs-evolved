<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro HANDLER-CASE

### Syntax
`handler-case expression [[{error-clause}* | no-error-clause]] => result*`  
`clause::= error-clause | no-error-clause`  
`error-clause::= (typespec ([var]) declaration* form*)`  
`no-error-clause::= (:no-error lambda-list declaration* form*)`  


### Arguments and Values
- **expression** : a form.   
- **typespec** : a type specifier.   
- **var** : a variable name.   
- **lambda-list** : an ordinary lambda list.   
- **declaration** : a declare expression; not evaluated.   
- **form** : a form.   
- **results** : In the normal situation, the values returned are those that result from the evaluation of expression; in the exceptional situation when control is transferred to a clause, the value of the last form in that clause is returned.   


### Description
handler-case executes expression in a dynamic environment where various handlers are active. Each error-clause specifies how to handle a condition matching the indicated typespec. A no-error-clause allows the specification of a particular action if control returns normally.  
If a condition is signaled for which there is an appropriate error-clause during the execution of expression (i.e., one for which (typep condition 'typespec) returns true) and if there is no intervening handler for a condition of that type, then control is transferred to the body of the relevant error-clause. In this case, the dynamic state is unwound appropriately (so that the handlers established around the expression are no longer active), and var is bound to the condition that had been signaled. If more than one case is provided, those cases are made accessible in parallel. That is, in  
  (handler-case form  
    (typespec1 (var1) form1)  
    (typespec2 (var2) form2))  
if the first clause (containing form1) has been selected, the handler for the second is no longer visible (or vice versa).  
 The clauses are searched sequentially from top to bottom. If there is type overlap between typespecs, the earlier of the clauses is selected.  
 If var is not needed, it can be omitted. That is, a clause such as:  
  (typespec (var) (declare (ignore var)) form)  
can be written (typespec () form).  
 If there are no forms in a selected clause, the case, and therefore handler-case, returns nil. If execution of expression returns normally and no no-error-clause exists, the values returned by expression are returned by handler-case. If execution of expression returns normally and a no-error-clause does exist, the values returned are used as arguments to the function described by constructing (lambda lambda-list form*) from the no-error-clause, and the values of that function call are returned by handler-case. The handlers which were established around the expression are no longer active at the time of this call.



### Examples
```lisp 
(defun assess-condition (condition)
   (handler-case (signal condition)
     (warning () "Lots of smoke, but no fire.")
     ((or arithmetic-error control-error cell-error stream-error)
        (condition)
       (format nil "~S looks especially bad." condition))
     (serious-condition (condition)
       (format nil "~S looks serious." condition))
     (condition () "Hardly worth mentioning.")))
=>  ASSESS-CONDITION
 (assess-condition (make-condition 'stream-error :stream *terminal-io*))
=>  "#<STREAM-ERROR 12352256> looks especially bad."
 (define-condition random-condition (condition) () 
   (:report (lambda (condition stream)
              (declare (ignore condition))
              (princ "Yow" stream))))
=>  RANDOM-CONDITION
 (assess-condition (make-condition 'random-condition))
=>  "Hardly worth mentioning."
```
