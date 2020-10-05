<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function LDIFF, TAILP

### Syntax
`ldiff list object => result-list`  
`tailp object list => generalized-boolean`  


### Arguments and Values
- **list** : a list,  which might be a dotted list.   
- **object** : an object.   
- **result-list** : a list.   
- **generalized-boolean** : a generalized boolean.   


### Description
If object is the same as some tail of list, tailp returns true; otherwise, it returns false.  
If object is the same as some tail of list, ldiff returns a fresh list of the elements of list that precede object in the list structure of list; otherwise, it returns a copy[2] of list.



### Examples
```lisp 
(let ((lists '#((a b c) (a b c . d))))
   (dotimes (i (length lists)) ()
     (let ((list (aref lists i)))
       (format t "~2&list=~S ~21T(tailp object list)~
                  ~44T(ldiff list object)~%" list)
         (let ((objects (vector list (cddr list) (copy-list (cddr list))
                                '(f g h) '() 'd 'x)))
           (dotimes (j (length objects)) ()
             (let ((object (aref objects j)))
               (format t "~& object=~S ~21T~S ~44T~S"
                       object (tailp object list) (ldiff list object))))))))
>>  
>>  list=(A B C)         (tailp object list)    (ldiff list object)
>>   object=(A B C)      T                      NIL
>>   object=(C)          T                      (A B)
>>   object=(C)          NIL                    (A B C)
>>   object=(F G H)      NIL                    (A B C)
>>   object=NIL          T                      (A B C)
>>   object=D            NIL                    (A B C)
>>   object=X            NIL                    (A B C)
>>  
>>  list=(A B C . D)     (tailp object list)    (ldiff list object)
>>   object=(A B C . D)  T                      NIL
>>   object=(C . D)      T                      (A B)
>>   object=(C . D)      NIL                    (A B C . D)
>>   object=(F G H)      NIL                    (A B C . D)
>>   object=NIL          NIL                    (A B C . D)
>>   object=D            T                      (A B C)
>>   object=X            NIL                    (A B C . D)
=>  NILSide Effects:
Neither ldiff nor tailp modifies either of its arguments.
```
