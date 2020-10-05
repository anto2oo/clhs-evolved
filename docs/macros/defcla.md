<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro DEFCLASS

### Syntax
`defclass class-name ({superclass-name}*) ({slot-specifier}*) [[class-option]] => new-class`  
`slot-specifier::= slot-name | (slot-name [[slot-option]])`  
`slot-name::= symbol`  
`slot-option::= {:reader reader-function-name}* |`  
`{:writer writer-function-name}* |`  
`{:accessor reader-function-name}* |`  
`{:allocation allocation-type} |`  
`{:initarg initarg-name}* |`  
`{:initform form} |`  
`{:type type-specifier} |`  
`{:documentation string}`  
`function-name::= {symbol | (setf symbol)}`  
`class-option::= (:default-initargs . initarg-list) |`  
`(:documentation string) |`  
`(:metaclass class-name)`  


### Arguments and Values
- **Class-name** : a non-nil symbol. :metaclass can be supplied once at most.   
- **Superclass-name** : a non-nil symbol.   
- **Slot-name** : a symbol. The slot-name argument is a symbol that is syntactically valid for use as a variable name.   
- **Reader-function-name** : a non-nil symbol. :accessor can be supplied more than once for a given slot.   
- **Writer-function-name** : a generic function name. :writer can be supplied more than once for a given slot.   
- **Allocation-type** : (member :instance :class). :allocation can be supplied once at most for a given slot.   
- **Initarg-name** : a symbol. :initarg can be supplied more than once for a given slot.   
- **Form** : a form. :init-form can be supplied once at most for a given slot.   
- **Type-specifier** : a type specifier. :type can be supplied once at most for a given slot.   
- **Class-option** :  refers to the class as a whole or to all class slots.   
- **Initarg-list** : a list of alternating initialization argument names and default initial value forms. :default-initargs can be supplied at most once.   
- **new-class** : the new class object.   


### Description
The macro defclass defines a new named class. It returns the new class object as its result.  
The syntax of defclass provides options for specifying initialization arguments for slots, for specifying default initialization values for slots, and for requesting that methods on specified generic functions be automatically generated for reading and writing the values of slots. No reader or writer functions are defined by default; their generation must be explicitly requested. However, slots can always be accessed using slot-value.  
Defining a new class also causes a type of the same name to be defined. The predicate (typep object class-name) returns true if the class of the given object is the class named by class-name itself or a subclass of the class class-name. A class object can be used as a type specifier. Thus (typep object class) returns true if the class of the object is class itself or a subclass of class.  
The class-name argument specifies the proper name of the new class. If a class with the same proper name already exists and that class is an instance of standard-class, and if the defclass form for the definition of the new class specifies a class of class standard-class, the existing class is redefined, and instances of it (and its subclasses) are updated to the new definition at the time that they are next accessed. For details, see Section 4.3.6 (Redefining Classes).  
 Each superclass-name argument specifies a direct superclass of the new class. If the superclass list is empty, then the superclass defaults depending on the metaclass, with standard-object being the default for standard-class.  
The new class will inherit slots and methods from each of its direct superclasses, from their direct superclasses, and so on. For a discussion of how slots and methods are inherited, see Section 4.3.4 (Inheritance).  
 The following slot options are available:  
No implementation is permitted to extend the syntax of defclass to allow (slot-name form) as an abbreviation for (slot-name :initform form).  
Each class option is an option that refers to the class as a whole. The following class options are available:  
Note the following rules of defclass for standard classes:  
The object system can be extended to cover situations where these rules are not obeyed.  
Some slot options are inherited by a class from its superclasses, and some can be shadowed or altered by providing a local slot description. No class options except :default-initargs are inherited. For a detailed description of how slots and slot options are inherited, see Section 7.5.3 (Inheritance of Slots and Slot Options).  
The options to defclass can be extended. It is required that all implementations signal an error if they observe a class option or a slot option that is not implemented locally.  
It is valid to specify more than one reader, writer, accessor, or initialization argument for a slot. No other slot option can appear more than once in a single slot description, or an error is signaled.  
If no reader, writer, or accessor is specified for a slot, the slot can only be accessed by the function slot-value.  
       If a defclass form appears as a top level form, the compiler must make the class name be recognized as a valid type name in subsequent declarations (as for deftype) and be recognized as a valid class name for defmethod parameter specializers and for use as the :metaclass option of a subsequent defclass. The compiler must make the class definition available to be returned by find-class when its environment argument is a value received as the environment parameter of a macro.Examples: None.



### Examples
No example  
