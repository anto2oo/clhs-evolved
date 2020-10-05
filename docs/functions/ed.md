<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function ED

### Syntax
`ed &optional x => implementation-dependent`  


### Arguments and Values
- **x** : nil, a pathname, a string, or a function name.  The default is nil.   


### Description
ed invokes the editor if the implementation provides a resident editor.  
If x is nil, the editor is entered. If the editor had been previously entered, its prior state is resumed, if possible.  
If x is a pathname or string, it is taken as the pathname designator for a file to be edited.  
If x is a function name, the text of its definition is edited. The means by which the function text is obtained is implementation-defined.Examples: None.



### Examples
No example  
