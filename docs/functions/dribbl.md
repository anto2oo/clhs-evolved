<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function DRIBBLE

### Syntax
`dribble &optional pathname => implementation-dependent`  


### Arguments and Values
- **pathname** : a pathname designator.   


### Description
Either binds *standard-input* and *standard-output* or takes other appropriate action, so as to send a record of the input/output interaction to a file named by pathname. dribble is intended to create a readable record of an interactive session.  
 If pathname is a logical pathname, it is translated into a physical pathname as if by calling translate-logical-pathname.  
(dribble) terminates the recording of input and output and closes the dribble file.  
 If dribble is called while a stream to a ``dribble file'' is still open from a previous call to dribble, the effect is implementation-defined. For example, the already-open stream might be closed, or dribbling might occur both to the old stream and to a new one, or the old stream might stay open but not receive any further output, or the new request might be ignored, or some other action might be taken.Examples: None.



### Examples
No example  
