<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Standard Generic Function REINITIALIZE-INSTANCE

### Syntax
`reinitialize-instance instance &rest initargs &key &allow-other-keys => instanceMethod Signatures:`  
`reinitialize-instance (instance standard-object) &rest initargs`  


### Arguments and Values
- **instance** : an object.   
- **initargs** : an initialization argument list.   


### Description
The generic function reinitialize-instance can be used to change the values of local slots of an instance according to initargs. This generic function can be called by users.  
The system-supplied primary method for reinitialize-instance checks the validity of initargs and signals an error if an initarg is supplied that is not declared as valid. The method then calls the generic function shared-initialize with the following arguments: the instance, nil (which means no slots should be initialized according to their initforms), and the initargs it received.Examples: None.Side Effects:  
The generic function reinitialize-instance changes the values of local slots.



### Examples
No example  
