<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Macro PPRINT-LOGICAL-BLOCK

### Syntax
`pprint-logical-block (stream-symbol object &key prefix per-line-prefix suffix) declaration* form* => nil`  


### Arguments and Values
- **stream-symbol** : a stream variable designator.   
- **object** : an object; evaluated.   
- **:prefix** : a string; evaluated. Complicated defaulting behavior; see below.   
- **:per-line-prefix** : a string; evaluated. Complicated defaulting behavior; see below.   
- **:suffix** : a string; evaluated. The default is the null string.   
- **declaration** : a declare expression; not evaluated.   
- **forms** : an implicit progn.   


### Description
Causes printing to be grouped into a logical block.  
The logical block is printed to the stream that is the value of the variable denoted by stream-symbol. During the execution of the forms, that variable is bound to a pretty printing stream that supports decisions about the arrangement of output and then forwards the output to the destination stream.   All the standard printing functions (e.g., write, princ, and terpri) can be used to print output to the pretty printing stream. All and only the output sent to this pretty printing stream is treated as being in the logical block.  
The prefix specifies a prefix to be printed before the beginning of the logical block. The per-line-prefix specifies a prefix that is printed before the block and at the beginning of each new line in the block. The :prefix and :pre-line-prefix arguments are mutually exclusive. If neither :prefix nor :per-line-prefix is specified, a prefix of the null string is assumed.  
The suffix specifies a suffix that is printed just after the logical block.  
The object is normally a list that the body forms are responsible for printing. If object is not a list, it is printed using write. (This makes it easier to write printing functions that are robust in the face of malformed arguments.) If *print-circle* is non-nil and object is a circular (or shared) reference to a cons, then an appropriate ``#n#'' marker is printed. (This makes it easy to write printing functions that provide full support for circularity and sharing abbreviation.) If *print-level* is not nil and the logical block is at a dynamic nesting depth of greater than *print-level* in logical blocks, ``#'' is printed. (This makes easy to write printing functions that provide full support for depth abbreviation.)  
If either of the three conditions above occurs, the indicated output is printed on stream-symbol and the body forms are skipped along with the printing of the :prefix and :suffix. (If the body forms are not to be responsible for printing a list, then the first two tests above can be turned off by supplying nil for the object argument.)  
In addition to the object argument of pprint-logical-block, the arguments of the standard printing functions (such as write, print, prin1, and pprint, as well as the arguments of the standard format directives such as ~A, ~S, (and ~W) are all checked (when necessary) for circularity and sharing. However, such checking is not applied to the arguments of the functions write-line, write-string, and write-char or to the literal text output by format. A consequence of this is that you must use one of the latter functions if you want to print some literal text in the output that is not supposed to be checked for circularity or sharing.  
The body forms of a pprint-logical-block form must not perform any side-effects on the surrounding environment; for example, no variables must be assigned which have not been bound within its scope.  
 The pprint-logical-block macro may be used regardless of the value of *print-pretty*.Examples: None.Side Effects: None.



### Examples
No example  
