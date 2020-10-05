<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Local Macro LOOP-FINISH

### Syntax
`loop-finish <no arguments> =>|`  


### Arguments and Values


### Description
The loop-finish macro can be used lexically within an extended loop form to terminate that form ``normally.'' That is, it transfers control to the loop epilogue of the lexically innermost extended loop form. This permits execution of any finally clause (for effect) and the return of any accumulated result.



### Examples
```lisp 
;; Terminate the loop, but return the accumulated count.
 (loop for i in '(1 2 3 stop-here 4 5 6)
       when (symbolp i) do (loop-finish)
       count i)
=>  3
 
;; The preceding loop is equivalent to:
 (loop for i in '(1 2 3 stop-here 4 5 6)
       until (symbolp i)
       count i)
=>  3

;; While LOOP-FINISH can be used can be used in a variety of 
;; situations it is really most needed in a situation where a need
;; to exit is detected at other than the loop's `top level'
;; (where UNTIL or WHEN often work just as well), or where some 
;; computation must occur between the point where a need to exit is
;; detected and the point where the exit actually occurs.  For example:
 (defun tokenize-sentence (string)
   (macrolet ((add-word (wvar svar)
                `(when ,wvar
                   (push (coerce (nreverse ,wvar) 'string) ,svar)
                   (setq ,wvar nil))))
     (loop with word = '() and sentence = '() and endpos = nil
           for i below (length string)
           do (let ((char (aref string i)))
                (case char
                  (#\Space (add-word word sentence))
                  (#\. (setq endpos (1+ i)) (loop-finish))
                  (otherwise (push char word))))
           finally (add-word word sentence)
                   (return (values (nreverse sentence) endpos)))))
=>  TOKENIZE-SENTENCE
 
 (tokenize-sentence "this is a sentence. this is another sentence.")
=>  ("this" "is" "a" "sentence"), 19
 
 (tokenize-sentence "this is a sentence")
=>  ("this" "is" "a" "sentence"), NILSide Effects:
Transfers control.
```
