<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Standard Generic Function PRINT-OBJECT

### Syntax
`print-object object stream => objectMethod Signatures:`  
`print-object (object standard-object) stream`  
`print-object (object structure-object) stream`  


### Arguments and Values
- **object** : an object.   
- **stream** : a stream.   


### Description
The generic function print-object writes the printed representation of object to stream. The function print-object is called by the Lisp printer; it should not be called by the user.  
 Each implementation is required to provide a method on the class standard-object and on the class structure-object. In addition, each implementation must provide methods on enough other classes so as to ensure that there is always an applicable method. Implementations are free to add methods for other classes. Users may write methods for print-object for their own classes if they do not wish to inherit an implementation-dependent method.  
The method on the class structure-object prints the object in the default #S notation; see Section 22.1.3.12 (Printing Structures).  
Methods on print-object are responsible for implementing their part of the semantics of the printer control variables, as follows:  
If these rules are not obeyed, the results are undefined.  
In general, the printer and the print-object methods should not rebind the print control variables as they operate recursively through the structure, but this is implementation-dependent.  
In some implementations the stream argument passed to a print-object method is not the original stream, but is an intermediate stream that implements part of the printer. methods should therefore not depend on the identity of this stream.Examples: None.



### Examples
No example  
