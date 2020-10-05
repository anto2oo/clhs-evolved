<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Standard Generic Function CHANGE-CLASS

### Syntax
`change-class instance new-class &key &allow-other-keys => instanceMethod Signatures:`  
`change-class (instance standard-object) (new-class standard-class) &rest initargs`  
`change-class (instance t) (new-class symbol) &rest initargs`  


### Arguments and Values
- **instance** : an object.   
- **new-class** : a class designator.   
- **initargs** : an initialization argument list.   


### Description
The generic function change-class changes the class of an instance to new-class. It destructively modifies and returns the instance.  
If in the old class there is any slot of the same name as a local slot in the new-class, the value of that slot is retained. This means that if the slot has a value, the value returned by slot-value after change-class is invoked is eql to the value returned by slot-value before change-class is invoked. Similarly, if the slot was unbound, it remains unbound. The other slots are initialized as described in Section 7.2 (Changing the Class of an Instance).  
After completing all other actions, change-class invokes update-instance-for-different-class. The generic function update-instance-for-different-class can be used to assign values to slots in the transformed instance.  See Section 7.2.2 (Initializing Newly Added Local Slots).  
 If the second of the above methods is selected, that method invokes change-class on instance, (find-class new-class), and the initargs.



### Examples
```lisp 
(defclass position () ())
  
 (defclass x-y-position (position)
     ((x :initform 0 :initarg :x)
      (y :initform 0 :initarg :y)))
  
 (defclass rho-theta-position (position)
     ((rho :initform 0)
      (theta :initform 0)))
  
 (defmethod update-instance-for-different-class :before ((old x-y-position) 
                                                         (new rho-theta-position)
                                                         &key)
   ;; Copy the position information from old to new to make new
   ;; be a rho-theta-position at the same position as old.
   (let ((x (slot-value old 'x))
         (y (slot-value old 'y)))
     (setf (slot-value new 'rho) (sqrt (+ (* x x) (* y y)))
           (slot-value new 'theta) (atan y x))))
  
;;; At this point an instance of the class x-y-position can be
;;; changed to be an instance of the class rho-theta-position using
;;; change-class:
 
 (setq p1 (make-instance 'x-y-position :x 2 :y 0))
  
 (change-class p1 'rho-theta-position)
  
;;; The result is that the instance bound to p1 is now an instance of
;;; the class rho-theta-position.   The update-instance-for-different-class
;;; method performed the initialization of the rho and theta slots based
;;; on the value of the x and y slots, which were maintained by
;;; the old instance.Examples: None.
```
