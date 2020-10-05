<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function MAKE-LOAD-FORM-SAVING-SLOTS

### Syntax
`make-load-form-saving-slots object &key slot-names environment => creation-form, initialization-form`  


### Arguments and Values
- **object** : an object.   
- **slot-names** : a list.   
- **environment** : an environment object.   
- **creation-form** : a form.   
- **initialization-form** : a form.   


### Description
Returns forms that, when evaluated, will construct an object equivalent to object, without executing initialization forms. The slots in the new object that correspond to initialized slots in object are initialized using the values from object. Uninitialized slots in object are not initialized in the new object. make-load-form-saving-slots works for any instance of standard-object or structure-object.  
Slot-names is a list of the names of the slots to preserve. If slot-names is not supplied, its value is all of the local slots.  
make-load-form-saving-slots returns two values, thus it can deal with circular structures. Whether the result is useful in an application depends on whether the object's type and slot contents fully capture the application's idea of the object's state.  
Environment is the environment in which the forms will be processed.Examples: None.Side Effects: None.



### Examples
No example  
