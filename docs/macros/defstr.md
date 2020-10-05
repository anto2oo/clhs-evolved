<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro DEFSTRUCT

### Syntax
`defstruct name-and-options [documentation] {slot-description}* => structure-name`  
`name-and-options::= structure-name | (structure-name [[options]])`  
`options::= conc-name-option |`  
`{constructor-option}* |`  
`copier-option |`  
`include-option |`  
`initial-offset-option |`  
`named-option |`  
`predicate-option |`  
`printer-option |`  
`type-option`  
`conc-name-option::= :conc-name | (:conc-name) | (:conc-name conc-name)`  
`constructor-option::= :constructor |`  
`(:constructor) |`  
`(:constructor constructor-name) |`  
`(:constructor constructor-name constructor-arglist)`  
`copier-option::= :copier | (:copier) | (:copier copier-name)`  
`predicate-option::= :predicate | (:predicate) | (:predicate predicate-name)`  
`include-option::= (:include included-structure-name {slot-description}*)`  
`printer-option::= print-object-option | print-function-option`  
`print-object-option::= (:print-object printer-name) | (:print-object)`  
`print-function-option::= (:print-function printer-name) | (:print-function)`  
`type-option::= (:type type)`  
`named-option::= :named`  
`initial-offset-option::= (:initial-offset initial-offset)`  
`slot-description::= slot-name |`  
`(slot-name [slot-initform [[slot-option]]])`  
`slot-option::= :type slot-type |`  
`:read-only slot-read-only-p`  


### Arguments and Values
- **conc-name** : a string designator.   
- **constructor-arglist** : a boa lambda list.   
- **constructor-name** : a symbol.   
- **copier-name** : a symbol.   
- **included-structure-name** : an already-defined structure name.  Note that a derived type is not permissible, even if it would expand into a structure name.   
- **initial-offset** : a non-negative integer.   
- **predicate-name** : a symbol.   
- **printer-name** : a function name or a lambda expression.   
- **slot-name** : a symbol.   
- **slot-initform** : a form.   
- **slot-read-only-p** : a generalized boolean.   
- **structure-name** : a symbol.   
- **type** : one of the type specifiers list, vector, or (vector size), or some other type specifier defined by the implementation to be appropriate.   
- **documentation** : a string; not evaluated.   


### Description
defstruct defines a structured type, named structure-type, with named slots as specified by the slot-options.  
defstruct defines readers for the slots and arranges for setf to work properly on such reader functions. Also, unless overridden, it defines a predicate named name-p, defines a constructor function named make-constructor-name, and defines a copier function named copy-constructor-name. All names of automatically created functions might automatically be declared inline (at the discretion of the implementation).  
If documentation is supplied, it is attached to structure-name as a documentation string of kind structure,  and unless :type is used, the documentation is also attached to structure-name as a documentation string of kind type and as a documentation string to the class object for the class named structure-name.  
defstruct defines a constructor function that is used to create instances of the structure created by defstruct. The default name is make-structure-name. A different name can be supplied by giving the name as the argument to the constructor option. nil indicates that no constructor function will be created.  
After a new structure type has been defined, instances of that type normally can be created by using the constructor function for the type. A call to a constructor function is of the following form:  
(constructor-function-name  
 slot-keyword-1 form-1  
 slot-keyword-2 form-2  
 ...)  
The arguments to the constructor function are all keyword arguments. Each slot keyword argument must be a keyword whose name corresponds to the name of a structure slot. All the keywords and forms are evaluated. If a slot is not initialized in this way, it is initialized by evaluating slot-initform in the slot description  at the time the constructor function is called.   If no slot-initform is supplied, the consequences are undefined if an attempt is later made to read the slot's value before a value is explicitly assigned.  
Each slot-initform supplied for a defstruct component, when used by the constructor function for an otherwise unsupplied component, is re-evaluated on every call to the constructor function.  The slot-initform is not evaluated unless it is needed in the creation of a particular structure instance. If it is never needed, there can be no type-mismatch error, even if the type of the slot is specified; no warning should be issued in this case.  For example, in the following sequence, only the last call is an error.  
 (defstruct person (name 007 :type string))   
 (make-person :name "James")  
 (make-person)  
It is as if the slot-initforms were used as initialization forms for the keyword parameters of the constructor function.  
 The symbols which name the slots must not be used by the implementation as the names for the lambda variables in the constructor function, since one or more of those symbols might have been proclaimed special or might be defined as the name of a constant variable. The slot default init forms are evaluated in the lexical environment in which the defstruct form itself appears and in the dynamic environment in which the call to the constructor function appears.  
For example, if the form (gensym) were used as an initialization form, either in the constructor-function call or as the default initialization form in defstruct, then every call to the constructor function would call gensym once to generate a new symbol.  
 Each slot-description in defstruct can specify zero or more slot-options.  A slot-option consists of a pair of a keyword and a value (which is not a form to be evaluated, but the value itself). For example:  
 (defstruct ship  
   (x-position 0.0 :type short-float)  
   (y-position 0.0 :type short-float)  
   (x-velocity 0.0 :type short-float)  
   (y-velocity 0.0 :type short-float)  
   (mass *default-ship-mass* :type short-float :read-only t))  
 The available slot-options are:  
 When this option is false or unsupplied, it is implementation-dependent whether the ability to write the slot is implemented by a setf function or a setf expander.  
The following keyword options are available for use with defstruct. A defstruct option can be either a keyword or a list of a keyword and arguments for that keyword; specifying the keyword by itself is equivalent to specifying a list consisting of the keyword and no arguments. The syntax for defstruct options differs from the pair syntax used for slot-options. No part of any of these options is evaluated.  
:conc-name supplies an alternate prefix to be used. If a hyphen is to be used as a separator, it must be supplied as part of the prefix. If :conc-name is nil or no argument is supplied, then no prefix is used; then the names of the reader functions are the same as the slot names. If a non-nil prefix is given, the name of the reader function for each slot is constructed by concatenating that prefix and the name of the slot, and interning the resulting symbol in the package that is current at the time the defstruct form is expanded.  
Note that no matter what is supplied for :conc-name, slot keywords that match the slot names with no prefix attached are used with a constructor function. The reader function name is used in conjunction with setf. Here is an example:  
 (defstruct (door (:conc-name dr-)) knob-color width material) =>  DOOR  
 (setq my-door (make-door :knob-color 'red :width 5.0))   
=>  #S(DOOR :KNOB-COLOR RED :WIDTH 5.0 :MATERIAL NIL)  
 (dr-width my-door) =>  5.0  
 (setf (dr-width my-door) 43.7) =>  43.7  
 (dr-width my-door) =>  43.7  
Whether or not the :conc-name option is explicitly supplied, the following rule governs name conflicts of generated reader (or accessor) names: For any structure type S1 having a reader function named R for a slot named X1 that is inherited by another structure type S2 that would have a reader function with the same name R for a slot named X2, no definition for R is generated by the definition of S2; instead, the definition of R is inherited from the definition of S1. (In such a case, if X1 and X2 are different slots, the implementation might signal a style warning.)  
If :constructor is given as (:constructor name arglist), then instead of making a keyword driven constructor function, defstruct defines a ``positional'' constructor function, taking arguments whose meaning is determined by the argument's position and possibly by keywords. Arglist is used to describe what the arguments to the constructor will be. In the simplest case something like (:constructor make-foo (a b c)) defines make-foo to be a three-argument constructor function whose arguments are used to initialize the slots named a, b, and c.  
Because a constructor of this type operates ``By Order of Arguments,'' it is sometimes known as a ``boa constructor.''  
For information on how the arglist for a ``boa constructor'' is processed, see Section 3.4.6 (Boa Lambda Lists).  
It is permissible to use the :constructor option more than once, so that you can define several different constructor functions, each taking different parameters.  
 defstruct creates the default-named keyword constructor function only if no explicit :constructor options are specified, or if the :constructor option is specified without a name argument.  
(:constructor nil) is meaningful only when there are no other :constructor options specified. It prevents defstruct from generating any constructors at all.  
Otherwise, defstruct creates a constructor function corresponding to each supplied :constructor option. It is permissible to specify multiple keyword constructor functions as well as multiple ``boa constructors''.  
 The automatically defined copier function is a function of one argument,  which must be of the structure type being defined.  The copier function creates a fresh structure that has the same type as its argument, and that has the same component values as the original structure; that is, the component values are not copied recursively.  If the defstruct :type option was not used, the following equivalence applies:  
 (copier-name x) = (copy-structure (the structure-name x))  
 (defstruct person name age sex)  
 (defstruct (astronaut (:include person)  
                       (:conc-name astro-))  
    helmet-size  
    (favorite-beverage 'tang))  
:include causes the structure being defined to have the same slots as the included structure. This is done in such a way that the reader functions for the included structure also work on the structure being defined. In this example, an astronaut therefore has five slots: the three defined in person and the two defined in astronaut itself. The reader functions defined by the person structure can be applied to instances of the astronaut structure, and they work correctly. Moreover, astronaut has its own reader functions for components defined by the person structure. The following examples illustrate the use of astronaut structures:  
 (setq x (make-astronaut :name 'buzz  
                         :age 45.  
                         :sex t  
                         :helmet-size 17.5))  
 (person-name x) =>  BUZZ  
 (astro-name x) =>  BUZZ  
 (astro-favorite-beverage x) =>  TANG  
 (reduce #'+ astros :key #'person-age) ; obtains the total of the ages   
                                       ; of the possibly empty  
                                       ; sequence of astros  
At most one :include can be supplied in a single defstruct. The argument to :include is required and must be the name of some previously defined structure. If the structure being defined has no :type option, then the included structure must also have had no :type option supplied for it. If the structure being defined has a :type option, then the included structure must have been declared with a :type option specifying the same representation type.  
If no :type option is involved, then the structure name of the including structure definition becomes the name of a data type, and therefore a valid type specifier recognizable by typep; it becomes a subtype of the included structure. In the above example, astronaut is a subtype of person; hence  
 (typep (make-astronaut) 'person) =>  true  
The structure using :include can specify default values or slot-options for the included slots different from those the included structure specifies, by giving the :include option as:  
 (:include included-structure-name slot-description*)  
For example, if the default age for an astronaut is 45, then  
 (defstruct (astronaut (:include person (age 45)))  
    helmet-size  
    (favorite-beverage 'tang))  
If :include is used with the :type option, then the effect is first to skip over as many representation elements as needed to represent the included structure, then to skip over any additional elements supplied by the :initial-offset option, and then to begin allocation of elements from that point. For example:  
 (defstruct (binop (:type list) :named (:initial-offset 2))  
   (operator '? :type symbol)     
   operand-1  
   operand-2) =>  BINOP  
 (defstruct (annotated-binop (:type list)  
                             (:initial-offset 3)  
                             (:include binop))  
  commutative associative identity) =>  ANNOTATED-BINOP  
 (make-annotated-binop :operator '*  
                       :operand-1 'x  
                       :operand-2 5  
                       :commutative t  
                       :associative t  
                       :identity 1)  
   =>  (NIL NIL BINOP * X 5 NIL NIL NIL T T 1)  
 :initial-offset allows slots to be allocated beginning at a representational element other than the first. For example, the form  
 (defstruct (binop (:type list) (:initial-offset 2))  
   (operator '? :type symbol)  
   operand-1  
   operand-2) =>  BINOP  
 (make-binop :operator '+ :operand-1 'x :operand-2 5)  
=>  (NIL NIL + X 5)  
 (make-binop :operand-2 4 :operator '*)  
=>  (NIL NIL * NIL 4)  
 (defstruct (binop (:type list) :named (:initial-offset 2))  
   (operator '? :type symbol)  
   operand-1  
   operand-2) =>  BINOP  
 (make-binop :operator '+ :operand-1 'x :operand-2 5) =>  (NIL NIL BINOP + X 5)  
 (make-binop :operand-2 4 :operator '*) =>  (NIL NIL BINOP * NIL 4)  
The first two nil elements stem from the :initial-offset of 2 in the definition of binop. The next four elements contain the structure name and three slots for binop.  
For example:  
 (defstruct (binop (:type list))  
   (operator '? :type symbol)  
   operand-1  
   operand-2) =>  BINOP  
The effect of make-binop is simply to construct a list of length three:  
 (make-binop :operator '+ :operand-1 'x :operand-2 5) =>  (+ X 5)    
 (make-binop :operand-2 4 :operator '*) =>  (* NIL 4)  
binop is a conceptual data type in that it is not made a part of the Common Lisp type system. typep does not recognize binop as a type specifier, and type-of returns list when given a binop structure. There is no way to distinguish a data structure constructed by make-binop from any other list that happens to have the correct structure.  
There is not any way to recover the structure name binop from a structure created by make-binop. This can only be done if the structure is named. A named structure has the property that, given an instance of the structure, the structure name (that names the type) can be reliably recovered. For structures defined with no :type option, the structure name actually becomes part of the Common Lisp data-type system. type-of, when applied to such a structure, returns the structure name as the type of the object; typep recognizes the structure name as a valid type specifier.  
For structures defined with a :type option, type-of returns a type specifier such as list or (vector t), depending on the type supplied to the :type option. The structure name does not become a valid type specifier. However, if the :named option is also supplied, then the first component of the structure (as created by a defstruct constructor function) always contains the structure name. This allows the structure name to be recovered from an instance of the structure and allows a reasonable predicate for the conceptual type to be defined: the automatically defined name-p predicate for the structure operates by first checking that its argument is of the proper type (list, (vector t), or whatever) and then checking whether the first component contains the appropriate type name.  
Consider the binop example shown above, modified only to include the :named option:  
 (defstruct (binop (:type list) :named)  
   (operator '? :type symbol)  
   operand-1  
   operand-2) =>  BINOP  
 (make-binop :operator '+ :operand-1 'x :operand-2 5) =>  (BINOP + X 5)  
 (make-binop :operand-2 4 :operator '*) =>  (BINOP * NIL 4)  
 (defun binop-p (x)  
   (and (consp x) (eq (car x) 'binop))) =>  BINOP-P  
If the :print-function option is used, then when a structure of type structure-name is to be printed, the designated printer function is called on three arguments:  
Specifying (:print-function printer-name) is approximately equivalent to specifying:  
 (defmethod print-object ((object structure-name) stream)  
   (funcall (function printer-name) object stream <<current-print-depth>>))  
where the <<current-print-depth>> represents the printer's belief of how deep it is currently printing. It is implementation-dependent whether <<current-print-depth>> is always 0 and *print-level*, if non-nil, is re-bound to successively smaller values as printing descends recursively, or whether current-print-depth varies in value as printing descends recursively and *print-level* remains constant during the same traversal.  
If the :print-object option is used, then when a structure of type structure-name is to be printed, the designated printer function is called on two arguments:  
Specifying (:print-object printer-name) is equivalent to specifying:  
 (defmethod print-object ((object structure-name) stream)  
   (funcall (function printer-name) object stream))  
  If no :type option is supplied, and if either a :print-function or a :print-object option is supplied, and if no printer-name is supplied, then a print-object method specialized for structure-name is generated that calls a function that implements the default printing behavior for structures using #S notation; see Section 22.1.3.12 (Printing Structures).  
If neither a :print-function nor a :print-object option is supplied, then defstruct does not generate a print-object method specialized for structure-name and some default behavior is inherited either from a structure named in an :include option or from the default behavior for printing structures; see the function print-object and Section 22.1.3.12 (Printing Structures).  
 When *print-circle* is true, a user-defined print function can print objects to the supplied stream using write, prin1, princ, or format and expect circularities to be detected and printed using the #n# syntax. This applies to methods on print-object in addition to :print-function options. If a user-defined print function prints to a stream other than the one that was supplied, then circularity detection starts over for that stream. See the variable *print-circle*.  
Specifying this option has the effect of forcing a specific representation and of forcing the components to be stored in the order specified in defstruct in corresponding successive elements of the specified representation. It also prevents the structure name from becoming a valid type specifier recognizable by typep.  
For example:  
 (defstruct (quux (:type list) :named) x y)  
should make a constructor that builds a list exactly like the one that list produces, with quux as its car.  
If this type is defined:  
 (deftype quux () '(satisfies quux-p))  
 (typep (make-quux) 'quux)  
 (typep (list 'quux nil nil) 'quux)  
If :type is not supplied, the structure is represented as an object of type structure-object.  
defstruct without a :type option defines a class with the structure name as its name. The metaclass of structure instances is structure-class.  
 The consequences of redefining a defstruct structure are undefined.  
In the case where no defstruct options have been supplied, the following functions are automatically defined to operate on instances of the new structure:  
 If a defstruct form appears as a top level form, the compiler must make the structure type name recognized as a valid type name in subsequent declarations (as for deftype) and make the structure slot readers known to setf. In addition, the compiler must save enough information about the structure type so that further defstruct definitions can use :include in a subsequent deftype in the same file to refer to the structure type name. The functions which defstruct generates are not defined in the compile time environment, although the compiler may save enough information about the functions to code subsequent calls inline. The #S reader macro might or might not recognize the newly defined structure type name at compile time.



### Examples
```lisp 
An example of a structure definition follows:
 (defstruct ship
   x-position
   y-position
   x-velocity
   y-velocity
   mass)
 (setq ship2 (make-ship))
 (setq ship2 (make-ship :mass *default-ship-mass*
                        :x-position 0
                        :y-position 0))
setf can be used to alter the components of a ship:
 (setf (ship-x-position ship2) 100)
;;;
;;; Example 1
;;; define town structure type
;;; area, watertowers, firetrucks, population, elevation are its components
;;;
 (defstruct town
             area
             watertowers
             (firetrucks 1 :type fixnum)    ;an initialized slot
             population 
             (elevation 5128 :read-only t)) ;a slot that can't be changed
=>  TOWN
;create a town instance
 (setq town1 (make-town :area 0 :watertowers 0)) =>  #S(TOWN...)
;town's predicate recognizes the new instance
 (town-p town1) =>  true
;new town's area is as specified by make-town
 (town-area town1) =>  0
;new town's elevation has initial value
 (town-elevation town1) =>  5128
;setf recognizes reader function
 (setf (town-population town1) 99) =>  99
 (town-population town1) =>  99
;copier function makes a copy of town1
 (setq town2 (copy-town town1)) =>  #S(TOWN...)
 (= (town-population town1) (town-population town2))  =>  true
;since elevation is a read-only slot, its value can be set only
;when the structure is created
 (setq town3 (make-town :area 0 :watertowers 3 :elevation 1200))
=>  #S(TOWN...)
;;;
;;; Example 2
;;; define clown structure type
;;; this structure uses a nonstandard prefix
;;;
 (defstruct (clown (:conc-name bozo-))
             (nose-color 'red)         
             frizzy-hair-p polkadots) =>  CLOWN
 (setq funny-clown (make-clown)) =>  #S(CLOWN)
;use non-default reader name
 (bozo-nose-color funny-clown) =>  RED        
 (defstruct (klown (:constructor make-up-klown) ;similar def using other
             (:copier clone-klown)              ;customizing keywords
             (:predicate is-a-bozo-p))
             nose-color frizzy-hair-p polkadots) =>  klown
;custom constructor now exists
 (fboundp 'make-up-klown) =>  true
;;;
;;; Example 3
;;; define a vehicle structure type
;;; then define a truck structure type that includes 
;;; the vehicle structure
;;;
 (defstruct vehicle name year (diesel t :read-only t)) =>  VEHICLE
 (defstruct (truck (:include vehicle (year 79)))
             load-limit                          
             (axles 6)) =>  TRUCK
 (setq x (make-truck :name 'mac :diesel t :load-limit 17))
=>  #S(TRUCK...)
;vehicle readers work on trucks
 (vehicle-name x)
=>  MAC
;default taken from :include clause 
 (vehicle-year x)
=>  79 
 (defstruct (pickup (:include truck))     ;pickup type includes truck
             camper long-bed four-wheel-drive) =>  PICKUP
 (setq x (make-pickup :name 'king :long-bed t)) =>  #S(PICKUP...)
;:include default inherited
 (pickup-year x) =>  79
;;;
;;; Example 4
;;; use of BOA constructors
;;;
 (defstruct (dfs-boa                      ;BOA constructors
               (:constructor make-dfs-boa (a b c)) 
               (:constructor create-dfs-boa
                 (a &optional b (c 'cc) &rest d &aux e (f 'ff))))
             a b c d e f) =>  DFS-BOA
;a, b, and c set by position, and the rest are uninitialized
 (setq x (make-dfs-boa 1 2 3)) =>  #(DFS-BOA...)
 (dfs-boa-a x) =>  1
;a and b set, c and f defaulted
 (setq x (create-dfs-boa 1 2)) =>  #(DFS-BOA...)
 (dfs-boa-b x) =>  2
 (eq (dfs-boa-c x) 'cc) =>  true
;a, b, and c set, and the rest are collected into d
 (setq x (create-dfs-boa 1 2 3 4 5 6)) =>  #(DFS-BOA...)
 (dfs-boa-d x) =>  (4 5 6)
```
