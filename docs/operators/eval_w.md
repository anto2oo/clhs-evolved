<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Special Operator EVAL-WHEN

### Syntax
`eval-when (situation*) form* => result*`  


### Arguments and Values


### Description
The body of an eval-when form is processed as an implicit progn, but only in the situations listed.  
 The use of the situations :compile-toplevel (or compile) and :load-toplevel (or load) controls whether and when evaluation occurs when eval-when appears as a top level form in code processed by compile-file. See Section 3.2.3 (File Compilation).  
The use of the situation :execute (or eval) controls whether evaluation occurs for other eval-when forms; that is, those that are not top level forms, or those in code processed by eval or compile. If the :execute situation is specified in such a form, then the body forms are processed as an implicit progn; otherwise, the eval-when form returns nil.  
 eval-when normally appears as a top level form, but it is meaningful for it to appear as a non-top-level form. However, the compile-time side effects described in Section 3.2 (Compilation) only take place when eval-when appears as a top level form.



### Examples
```lisp 
One example of the use of eval-when is that for the compiler to be able to read a file properly when it uses user-defined reader macros, it is necessary to write
 (eval-when (:compile-toplevel :load-toplevel :execute)
   (set-macro-character #\$ #'(lambda (stream char)
                                (declare (ignore char))
                                (list 'dollar (read stream))))) =>  T
;;;     The EVAL-WHEN in this case is not at toplevel, so only the :EXECUTE
;;;     keyword is considered. At compile time, this has no effect.
;;;     At load time (if the LET is at toplevel), or at execution time
;;;     (if the LET is embedded in some other form which does not execute
;;;     until later) this sets (SYMBOL-FUNCTION 'FOO1) to a function which
;;;     returns 1.
 (let ((x 1))
   (eval-when (:execute :load-toplevel :compile-toplevel)
     (setf (symbol-function 'foo1) #'(lambda () x))))

;;;     If this expression occurs at the toplevel of a file to be compiled,
;;;     it has BOTH a compile time AND a load-time effect of setting
;;;     (SYMBOL-FUNCTION 'FOO2) to a function which returns 2.
 (eval-when (:execute :load-toplevel :compile-toplevel)
   (let ((x 2))
     (eval-when (:execute :load-toplevel :compile-toplevel)
       (setf (symbol-function 'foo2) #'(lambda () x)))))

;;;     If this expression occurs at the toplevel of a file to be compiled,
;;;     it has BOTH a compile time AND a load-time effect of setting the
;;;     function cell of FOO3 to a function which returns 3.
 (eval-when (:execute :load-toplevel :compile-toplevel)
   (setf (symbol-function 'foo3) #'(lambda () 3)))
 
;;; #4: This always does nothing. It simply returns NIL.
 (eval-when (:compile-toplevel)
   (eval-when (:compile-toplevel) 
     (print 'foo4)))

;;;     If this form occurs at toplevel of a file to be compiled, FOO5 is
;;;     printed at compile time. If this form occurs in a non-top-level
;;;     position, nothing is printed at compile time. Regardless of context,
;;;     nothing is ever printed at load time or execution time.
 (eval-when (:compile-toplevel) 
   (eval-when (:execute)
     (print 'foo5)))
 
;;;     If this form occurs at toplevel of a file to be compiled, FOO6 is
;;;     printed at compile time.  If this form occurs in a non-top-level
;;;     position, nothing is printed at compile time. Regardless of context,
;;;     nothing is ever printed at load time or execution time.
 (eval-when (:execute :load-toplevel)
   (eval-when (:compile-toplevel)
     (print 'foo6)))
```
