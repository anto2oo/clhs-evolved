<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function SLOT-VALUE

### Syntax
`slot-value object slot-name => value`  


### Arguments and Values
- **object** : an object.   
- **name** : a symbol.   
- **value** : an object.   


### Description
The function slot-value returns the value of the slot named slot-name in the object. If there is no slot named slot-name, slot-missing is called. If the slot is unbound, slot-unbound is called.  
The macro setf can be used with slot-value to change the value of a slot.



### Examples
```lisp 
(defclass foo () 
   ((a :accessor foo-a :initarg :a :initform 1)
    (b :accessor foo-b :initarg :b)
    (c :accessor foo-c :initform 3)))
=>  #<STANDARD-CLASS FOO 244020371>
 (setq foo1 (make-instance 'foo :a 'one :b 'two))
=>  #<FOO 36325624>
 (slot-value foo1 'a) =>  ONE
 (slot-value foo1 'b) =>  TWO
 (slot-value foo1 'c) =>  3
 (setf (slot-value foo1 'a) 'uno) =>  UNO
 (slot-value foo1 'a) =>  UNO
 (defmethod foo-method ((x foo))
   (slot-value x 'a))
=>  #<STANDARD-METHOD FOO-METHOD (FOO) 42720573>
 (foo-method foo1) =>  UNO
```
