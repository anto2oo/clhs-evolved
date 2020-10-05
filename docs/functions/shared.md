<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Standard Generic Function SHARED-INITIALIZE

### Syntax
`shared-initialize instance slot-names &rest initargs &key &allow-other-keys => instanceMethod Signatures:`  
`shared-initialize (instance standard-object) slot-names &rest initargs`  


### Arguments and Values
- **instance** : an object.   
- **slot-names** : a list or t.   
- **initargs** : a list of keyword/value pairs (of initialization argument names and values).   


### Description
The generic function shared-initialize is used to fill the slots of an instance using initargs and :initform forms. It is called when an instance is created, when an instance is re-initialized, when an instance is updated to conform to a redefined class, and when an instance is updated to conform to a different class. The generic function shared-initialize is called by the system-supplied primary method for initialize-instance, reinitialize-instance, update-instance-for-redefined-class, and update-instance-for-different-class.  
The generic function shared-initialize takes the following arguments: the instance to be initialized, a specification of a set of slot-names accessible in that instance, and any number of initargs. The arguments after the first two must form an initialization argument list. The system-supplied primary method on shared-initialize initializes the slots with values according to the initargs and supplied :initform forms. Slot-names indicates which slots should be initialized according to their :initform forms if no initargs are provided for those slots.  
The system-supplied primary method behaves as follows, regardless of whether the slots are local or shared:  
The slots-names argument specifies the slots that are to be initialized according to their :initform forms if no initialization arguments apply. It can be a list of slot names, which specifies the set of those slot names; or it can be the symbol t, which specifies the set of all of the slots.Examples: None.



### Examples
No example  
