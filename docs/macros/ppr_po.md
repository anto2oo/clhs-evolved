<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Local Macro PPRINT-POP

### Syntax
`pprint-pop <no arguments> => object`  


### Arguments and Values
- **object** : an element of the list being printed in the lexically current logical block, or nil.   


### Description
Pops one element from the list being printed in the lexically current logical block, obeying *print-length* and *print-circle* as described below.  
Each time pprint-pop is called, it pops the next value off the list passed to the lexically current logical block and returns it. However, before doing this, it performs three tests:  
If either of the three conditions above occurs, the indicated output is printed on the pretty printing stream created by the immediately containing pprint-logical-block and the execution of the immediately containing pprint-logical-block is terminated except for the printing of the suffix.  
If pprint-logical-block is given a `list' argument of nil---because it is not processing a list---pprint-pop can still be used to obtain support for *print-length*. In this situation, the first and third tests above are disabled and pprint-pop always returns nil. See Section 22.2.2 (Examples of using the Pretty Printer)---specifically, the pprint-vector example.  
 Whether or not pprint-pop is fbound in the global environment is implementation-dependent; however, the restrictions on redefinition and shadowing of pprint-pop are the same as for symbols in the COMMON-LISP package which are fbound in the global environment. The consequences of attempting to use pprint-pop outside of pprint-logical-block are undefined.Examples: None.Side Effects:  
Might cause output to the pretty printing stream associated with the lexically current logical block.



### Examples
No example  
