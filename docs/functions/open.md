<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function OPEN

### Syntax
`open filespec &key direction element-type if-exists if-does-not-exist external-format => stream`  


### Arguments and Values
- **filespec** : a pathname designator.   
- **direction** : one of :input, :output, :io, or :probe. The default is :input.   
- **element-type** : a type specifier for recognizable subtype of character; or a type specifier for a finite recognizable subtype of integer; or one of the symbols signed-byte, unsigned-byte, or :default. The default is character.   
- **if-exists** : one of :error, :new-version, :rename, :rename-and-delete, :overwrite, :append, :supersede, or nil. The default is :new-version if the version component of filespec is :newest, or :error otherwise.   
- **if-does-not-exist** : one of :error, :create, or nil. The default is :error if direction is :input or if-exists is :overwrite or :append; :create if direction is :output or :io, and if-exists is neither :overwrite nor :append; or nil when direction is :probe.   
- **external-format** : an external file format designator. The default is :default.   
- **stream** : a file stream or nil.   


### Description
open creates, opens, and returns a file stream that is connected to the file specified by filespec. Filespec is the name of the file to be opened. If the filespec designator is a stream, that stream is not closed first or otherwise affected.  
The keyword arguments to open specify the characteristics of the file stream that is returned, and how to handle errors.  
If direction is :input or :probe, or if if-exists is not :new-version and the version component of the filespec is :newest, then the file opened is that file already existing in the file system that has a version greater than that of any other file in the file system whose other pathname components are the same as those of filespec.  
An implementation is required to recognize all of the open keyword options and to do something reasonable in the context of the host operating system. For example, if a file system does not support distinct file versions and does not distinguish the notions of deletion and expunging, :new-version might be treated the same as :rename or :supersede, and :rename-and-delete might be treated the same as :supersede.  
If direction is :io, the file is opened in a bidirectional mode that allows both reading and writing.  
The external-format is meaningful for any kind of file stream whose element type is a subtype of character. This option is ignored for streams for which it is not meaningful; however, implementations may define other element types for which it is meaningful. The consequences are unspecified if a character is written that cannot be represented by the given external file format.  
When a file is opened, a file stream is constructed to serve as the file system's ambassador to the Lisp environment; operations on the file stream are reflected by operations on the file in the file system.  
A file can be deleted, renamed, or destructively modified by open.  
For information about opening relative pathnames, see Section 19.2.3 (Merging Pathnames).



### Examples
```lisp 
(open filespec :direction :probe)  =>  #<Closed Probe File Stream...>
 (setq q (merge-pathnames (user-homedir-pathname) "test"))
=>  #<PATHNAME :HOST NIL :DEVICE device-name :DIRECTORY directory-name
    :NAME "test" :TYPE NIL :VERSION :NEWEST>
 (open filespec :if-does-not-exist :create) =>  #<Input File Stream...>
 (setq s (open filespec :direction :probe)) =>  #<Closed Probe File Stream...>
 (truename s) =>  #<PATHNAME :HOST NIL :DEVICE device-name :DIRECTORY
    directory-name :NAME filespec :TYPE extension :VERSION 1>
 (open s :direction :output :if-exists nil) =>  NIL
```
