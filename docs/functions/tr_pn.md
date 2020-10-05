<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function TRANSLATE-PATHNAME

### Syntax
`translate-pathname source from-wildcard to-wildcard &key => translated-pathname`  


### Arguments and Values
- **source** : a pathname designator.   
- **from-wildcard** : a pathname designator.   
- **to-wildcard** : a pathname designator.   
- **translated-pathname** : a pathname.   


### Description
translate-pathname translates source (that matches from-wildcard) into a corresponding pathname that matches to-wildcard, and returns the corresponding pathname.  
The resulting pathname is to-wildcard with each wildcard or missing field replaced by a portion of source. A ``wildcard field'' is a pathname component with a value of :wild, a :wild element of a list-valued directory component, or an implementation-defined portion of a component, such as the "*" in the complex wildcard string "foo*bar" that some implementations support. An implementation that adds other wildcard features, such as regular expressions, must define how translate-pathname extends to those features. A ``missing field'' is a pathname component with a value of nil.  
 The portion of source that is copied into the resulting pathname is implementation-defined. Typically it is determined by the user interface conventions of the file systems involved. Usually it is the portion of source that matches a wildcard field of from-wildcard that is in the same position as the wildcard or missing field of to-wildcard. If there is no wildcard field in from-wildcard at that position, then usually it is the entire corresponding pathname component of source, or in the case of a list-valued directory component, the entire corresponding list element.  
 During the copying of a portion of source into the resulting pathname, additional implementation-defined translations of case or file naming conventions might occur, especially when from-wildcard and to-wildcard are for different hosts.  
It is valid for source to be a wild pathname; in general this will produce a wild result. It is valid for from-wildcard and/or to-wildcard to be non-wild pathnames.  
 There are no specified keyword arguments for translate-pathname, but implementations are permitted to extend it by adding keyword arguments.  
  translate-pathname maps customary case in source into customary case in the output pathname.



### Examples
```lisp 
;; The results of the following five forms are all implementation-dependent.
 ;; The second item in particular is shown with multiple results just to 
 ;; emphasize one of many particular variations which commonly occurs.
 (pathname-name (translate-pathname "foobar" "foo*" "*baz")) =>  "barbaz"
 (pathname-name (translate-pathname "foobar" "foo*" "*"))
=>  "foobar"
OR=>  "bar"
 (pathname-name (translate-pathname "foobar" "*"    "foo*")) =>  "foofoobar"
 (pathname-name (translate-pathname "bar"    "*"    "foo*")) =>  "foobar"
 (pathname-name (translate-pathname "foobar" "foo*" "baz*")) =>  "bazbar"

 (defun translate-logical-pathname-1 (pathname rules)
   (let ((rule (assoc pathname rules :test #'pathname-match-p)))
     (unless rule (error "No translation rule for ~A" pathname))
     (translate-pathname pathname (first rule) (second rule))))
 (translate-logical-pathname-1 "FOO:CODE;BASIC.LISP"
                       '(("FOO:DOCUMENTATION;" "MY-UNIX:/doc/foo/")
                         ("FOO:CODE;"          "MY-UNIX:/lib/foo/")
                         ("FOO:PATCHES;*;"     "MY-UNIX:/lib/foo/patch/*/")))
=>  #P"MY-UNIX:/lib/foo/basic.l"

;;;This example assumes one particular set of wildcard conventions
;;;Not all file systems will run this example exactly as written
 (defun rename-files (from to)
   (dolist (file (directory from))
     (rename-file file (translate-pathname file from to))))
 (rename-files "/usr/me/*.lisp" "/dev/her/*.l")
   ;Renames /usr/me/init.lisp to /dev/her/init.l
 (rename-files "/usr/me/pcl*/*" "/sys/pcl/*/")
   ;Renames /usr/me/pcl-5-may/low.lisp to /sys/pcl/pcl-5-may/low.lisp
   ;In some file systems the result might be /sys/pcl/5-may/low.lisp
 (rename-files "/usr/me/pcl*/*" "/sys/library/*/")
   ;Renames /usr/me/pcl-5-may/low.lisp to /sys/library/pcl-5-may/low.lisp
   ;In some file systems the result might be /sys/library/5-may/low.lisp
 (rename-files "/usr/me/foo.bar" "/usr/me2/")
   ;Renames /usr/me/foo.bar to /usr/me2/foo.bar
 (rename-files "/usr/joe/*-recipes.text" "/usr/jim/cookbook/joe's-*-rec.text")
   ;Renames /usr/joe/lamb-recipes.text to /usr/jim/cookbook/joe's-lamb-rec.text
   ;Renames /usr/joe/pork-recipes.text to /usr/jim/cookbook/joe's-pork-rec.text
   ;Renames /usr/joe/veg-recipes.text to /usr/jim/cookbook/joe's-veg-rec.text
```
