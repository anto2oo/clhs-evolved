<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Standard Generic Function MAKE-INSTANCE

### Syntax
`make-instance class &rest initargs &key &allow-other-keys => instanceMethod Signatures:`  
`make-instance (class standard-class) &rest initargs`  
`make-instance (class symbol) &rest initargs`  


### Arguments and Values
- **class** : a class, or a symbol that names a class.   
- **initargs** : an initialization argument list.   
- **instance** : a fresh instance of class class.   


### Description
The generic function make-instance creates and returns a new instance of the given class.  
If the second of the above methods is selected, that method invokes make-instance on the arguments (find-class class) and initargs.  
The initialization arguments are checked within make-instance.  
The generic function make-instance may be used as described in Section 7.1 (Object Creation and Initialization).



### Examples
No example  
