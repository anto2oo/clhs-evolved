<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro DEFINE-METHOD-COMBINATION

### Syntax
`define-method-combination name [[short-form-option]] => name`  
`define-method-combination name lambda-list (method-group-specifier*) [(:arguments . args-lambda-list)] [(:generic-function generic-function-symbol)] [[declaration* | documentation]] form* => name`  
`short-form-option::= :documentation documentation |`  
`:identity-with-one-argument identity-with-one-argument |`  
`:operator operator`  
`method-group-specifier::= (name {qualifier-pattern+ | predicate} [[long-form-option]])`  
`long-form-option::= :description description |`  
`:order order |`  
`:required required-p`  


### Arguments and Values
- **args-lambda-list** : a define-method-combination arguments lambda list.   
- **declaration** : a declare expression; not evaluated.   
- **description** : a format control.   
- **documentation** : a string; not evaluated.   
- **forms** : an implicit progn that must compute and return the form that specifies how the methods are combined, that is, the effective method.   
- **generic-function-symbol** : a symbol.   
- **identity-with-one-argument** : a generalized boolean.   
- **lambda-list** : ordinary lambda list.   
- **name** : a symbol. Non-keyword, non-nil symbols are usually used.   
- **operator** : an operator. Name and operator are often the same symbol. This is the default, but it is not required.   
- **order** : :most-specific-first or :most-specific-last; evaluated.   
- **predicate** : a symbol that names a function of one argument that returns a generalized boolean.   
- **qualifier-pattern** : a list, or the symbol *.   
- **required-p** : a generalized boolean.   


### Description
The macro define-method-combination is used to define new types of method combination.  
There are two forms of define-method-combination. The short form is a simple facility for the cases that are expected to be most commonly needed. The long form is more powerful but more verbose. It resembles defmacro in that the body is an expression, usually using backquote, that computes a form. Thus arbitrary control structures can be implemented. The long form also allows arbitrary processing of method qualifiers.  
Keyword options for the short form are the following:  
 These types of method combination require exactly one qualifier per method. An error is signaled if there are applicable methods with no qualifiers or with qualifiers that are not supported by the method combination type.  
A method combination procedure defined in this way recognizes two roles for methods. A method whose one qualifier is the symbol naming this type of method combination is defined to be a primary method. At least one primary method must be applicable or an error is signaled. A method with :around as its one qualifier is an auxiliary method that behaves the same as an around method in standard method combination. The function call-next-method can only be used in around methods; it cannot be used in primary methods defined by the short form of the define-method-combination macro.  
A method combination procedure defined in this way accepts an optional argument named order, which defaults to :most-specific-first. A value of :most-specific-last reverses the order of the primary methods without affecting the order of the auxiliary methods.  
The short form automatically includes error checking and support for around methods.  
For a discussion of built-in method combination types, see Section 7.6.6.4 (Built-in Method Combination Types).  
The lambda-list receives any arguments provided after the name of the method combination type in the :method-combination option to defgeneric.  
A list of method group specifiers follows. Each specifier selects a subset of the applicable methods to play a particular role, either by matching their qualifiers against some patterns or by testing their qualifiers with a predicate. These method group specifiers define all method qualifiers that can be used with this type of method combination.  
 The car of each method-group-specifier is a symbol which names a variable. During the execution of the forms in the body of define-method-combination, this variable is bound to a list of the methods in the method group. The methods in this list occur in the order specified by the :order option.  
If qualifier-pattern is a symbol it must be *. A method matches a qualifier-pattern if the method's list of qualifiers is equal to the qualifier-pattern (except that the symbol * in a qualifier-pattern matches anything). Thus a qualifier-pattern can be one of the following: the empty list, which matches unqualified methods; the symbol *, which matches all methods; a true list, which matches methods with the same number of qualifiers as the length of the list when each qualifier matches the corresponding list element; or a dotted list that ends in the symbol * (the * matches any number of additional qualifiers).  
 Each applicable method is tested against the qualifier-patterns and predicates in left-to-right order. As soon as a qualifier-pattern matches or a predicate returns true, the method becomes a member of the corresponding method group and no further tests are made. Thus if a method could be a member of more than one method group, it joins only the first such group. If a method group has more than one qualifier-pattern, a method need only satisfy one of the qualifier-patterns to be a member of the group.  
The name of a predicate function can appear instead of qualifier-patterns in a method group specifier. The predicate is called for each method that has not been assigned to an earlier method group; it is called with one argument, the method's qualifier list. The predicate should return true if the method is to be a member of the method group. A predicate can be distinguished from a qualifier-pattern because it is a symbol other than nil or *.  
 If there is an applicable method that does not fall into any method group, the function invalid-method-error is called.  
Method group specifiers can have keyword options following the qualifier patterns or predicate. Keyword options can be distinguished from additional qualifier patterns because they are neither lists nor the symbol *. The keyword options are as follows:  
The use of method group specifiers provides a convenient syntax to select methods, to divide them among the possible roles, and to perform the necessary error checking. It is possible to perform further filtering of methods in the body forms by using normal list-processing operations and the functions method-qualifiers and invalid-method-error. It is permissible to use setq on the variables named in the method group specifiers and to bind additional variables. It is also possible to bypass the method group specifier mechanism and do everything in the body forms. This is accomplished by writing a single method group with * as its only qualifier-pattern; the variable is then bound to a list of all of the applicable methods, in most-specific-first order.  
 The body forms compute and return the form that specifies how the methods are combined, that is, the effective method. The effective method is evaluated in the null lexical environment augmented with a local macro definition for call-method and with bindings named by symbols not accessible from the COMMON-LISP-USER package. Given a method object in one of the lists produced by the method group specifiers and a list of next methods, call-method will invoke the method such that call-next-method has available the next methods.  
When an effective method has no effect other than to call a single method, some implementations employ an optimization that uses the single method directly as the effective method, thus avoiding the need to create a new effective method. This optimization is active when the effective method form consists entirely of an invocation of the call-method macro whose first subform is a method object and whose second subform is nil or unsupplied. Each define-method-combination body is responsible for stripping off redundant invocations of progn, and, multiple-value-prog1, and the like, if this optimization is desired.  
  The list (:arguments . lambda-list) can appear before any declarations or documentation string. This form is useful when the method combination type performs some specific behavior as part of the combined method and that behavior needs access to the arguments to the generic function. Each parameter variable defined by lambda-list is bound to a form that can be inserted into the effective method. When this form is evaluated during execution of the effective method, its value is the corresponding argument to the generic function; the consequences of using such a form as the place in a setf form are undefined.  Argument correspondence is computed by dividing the :arguments lambda-list and the generic function lambda-list into three sections: the required parameters, the optional parameters, and the keyword and rest parameters. The arguments supplied to the generic function for a particular call are also divided into three sections; the required arguments section contains as many arguments as the generic function has required parameters, the optional arguments section contains as many arguments as the generic function has optional parameters, and the keyword/rest arguments section contains the remaining arguments. Each parameter in the required and optional sections of the :arguments lambda-list accesses the argument at the same position in the corresponding section of the arguments. If the section of the :arguments lambda-list is shorter, extra arguments are ignored. If the section of the :arguments lambda-list is longer, excess required parameters are bound to forms that evaluate to nil and excess optional parameters are bound to their initforms. The keyword parameters and rest parameters in the :arguments lambda-list access the keyword/rest section of the arguments. If the :arguments lambda-list contains &key, it behaves as if it also contained &allow-other-keys.  
In addition, &whole var can be placed first in the :arguments lambda-list. It causes var to be bound to a form that evaluates to a list of all of the arguments supplied to the generic function. This is different from &rest because it accesses all of the arguments, not just the keyword/rest arguments.  
Erroneous conditions detected by the body should be reported with method-combination-error or invalid-method-error; these functions add any necessary contextual information to the error message and will signal the appropriate error.  
The body forms are evaluated inside of the bindings created by the lambda list and method group specifiers.  Declarations at the head of the body are positioned directly inside of bindings created by the lambda list and outside of the bindings of the method group variables. Thus method group variables cannot be declared in this way. locally may be used around the body, however.  
Within the body forms, generic-function-symbol is bound to the generic function object.  
 Documentation is attached as a documentation string to name (as kind method-combination) and to the method combination object.  
  Note that two methods with identical specializers, but with different qualifiers, are not ordered by the algorithm described in Step 2 of the method selection and combination process described in Section 7.6.6 (Method Selection and Combination). Normally the two methods play different roles in the effective method because they have different qualifiers, and no matter how they are ordered in the result of Step 2, the effective method is the same. If the two methods play the same role and their order matters,  an error is signaled. This happens as part of the qualifier pattern matching in define-method-combination.  
 If a define-method-combination form appears as a top level form, the compiler must make the method combination name be recognized as a valid method combination name in subsequent defgeneric forms. However, the method combination is executed no earlier than when the define-method-combination form is executed, and possibly as late as the time that generic functions that use the method combination are executed.



### Examples
```lisp 
Most examples of the long form of define-method-combination also illustrate the use of the related functions that are provided as part of the declarative method combination facility.
;;; Examples of the short form of define-method-combination
 
 (define-method-combination and :identity-with-one-argument t) 
  
 (defmethod func and ((x class1) y) ...)
 
;;; The equivalent of this example in the long form is:
 
 (define-method-combination and 
         (&optional (order :most-specific-first))
         ((around (:around))
          (primary (and) :order order :required t))
   (let ((form (if (rest primary)
                   `(and ,@(mapcar #'(lambda (method)
                                       `(call-method ,method))
                                   primary))
                   `(call-method ,(first primary)))))
     (if around
         `(call-method ,(first around)
                       (,@(rest around)
                        (make-method ,form)))
         form)))
  
;;; Examples of the long form of define-method-combination
 
;The default method-combination technique
 (define-method-combination standard ()
         ((around (:around))
          (before (:before))
          (primary () :required t)
          (after (:after)))
   (flet ((call-methods (methods)
            (mapcar #'(lambda (method)
                        `(call-method ,method))
                    methods)))
     (let ((form (if (or before after (rest primary))
                     `(multiple-value-prog1
                        (progn ,@(call-methods before)
                               (call-method ,(first primary)
                                            ,(rest primary)))
                        ,@(call-methods (reverse after)))
                     `(call-method ,(first primary)))))
       (if around
           `(call-method ,(first around)
                         (,@(rest around)
                          (make-method ,form)))
           form))))
  
;A simple way to try several methods until one returns non-nil
 (define-method-combination or ()
         ((methods (or)))
   `(or ,@(mapcar #'(lambda (method)
                      `(call-method ,method))
                  methods)))
  
;A more complete version of the preceding
 (define-method-combination or 
         (&optional (order ':most-specific-first))
         ((around (:around))
          (primary (or)))
   ;; Process the order argument
   (case order
     (:most-specific-first)
     (:most-specific-last (setq primary (reverse primary)))
     (otherwise (method-combination-error "~S is an invalid order.~@
     :most-specific-first and :most-specific-last are the possible values."
                                          order)))
   ;; Must have a primary method
   (unless primary
     (method-combination-error "A primary method is required."))
   ;; Construct the form that calls the primary methods
   (let ((form (if (rest primary)
                   `(or ,@(mapcar #'(lambda (method)
                                      `(call-method ,method))
                                  primary))
                   `(call-method ,(first primary)))))
     ;; Wrap the around methods around that form
     (if around
         `(call-method ,(first around)
                       (,@(rest around)
                        (make-method ,form)))
         form)))
  
;The same thing, using the :order and :required keyword options
 (define-method-combination or 
         (&optional (order ':most-specific-first))
         ((around (:around))
          (primary (or) :order order :required t))
   (let ((form (if (rest primary)
                   `(or ,@(mapcar #'(lambda (method)
                                      `(call-method ,method))
                                  primary))
                   `(call-method ,(first primary)))))
     (if around
         `(call-method ,(first around)
                       (,@(rest around)
                        (make-method ,form)))
         form)))
  
;This short-form call is behaviorally identical to the preceding
 (define-method-combination or :identity-with-one-argument t)
 
;Order methods by positive integer qualifiers
;:around methods are disallowed to keep the example small
 (define-method-combination example-method-combination ()
         ((methods positive-integer-qualifier-p))
   `(progn ,@(mapcar #'(lambda (method)
                         `(call-method ,method))
                     (stable-sort methods #'<
                       :key #'(lambda (method)
                                (first (method-qualifiers method)))))))
 
 (defun positive-integer-qualifier-p (method-qualifiers)
   (and (= (length method-qualifiers) 1)
        (typep (first method-qualifiers) '(integer 0 *))))
  
;;; Example of the use of :arguments
 (define-method-combination progn-with-lock ()
         ((methods ()))
   (:arguments object)
   `(unwind-protect
        (progn (lock (object-lock ,object))
               ,@(mapcar #'(lambda (method)
                             `(call-method ,method))
                         methods))
      (unlock (object-lock ,object))))
```
