<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro WITH-CONDITION-RESTARTS

### Syntax
`with-condition-restarts condition-form restarts-form form* => result*`  


### Arguments and Values
- **condition-form** : a form; evaluated to produce a condition.   
- **condition** : a condition object resulting from the evaluation of condition-form.   
- **restart-form** : a form; evaluated to produce a restart-list.   
- **restart-list** : a list of restart objects resulting from the evaluation of restart-form.   
- **forms** : an implicit progn; evaluated.   
- **results** : the values returned by forms.   


### Description
First, the condition-form and restarts-form are evaluated in normal left-to-right order; the primary values yielded by these evaluations are respectively called the condition and the restart-list.  
Next, the forms are evaluated in a dynamic environment in which each restart in restart-list is associated with the condition. See Section 9.1.4.2.4 (Associating a Restart with a Condition).Examples: None.Side Effects: None.



### Examples
No example  
