<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function FILE-WRITE-DATE

### Syntax
`file-write-date pathspec => date`  


### Arguments and Values
- **pathspec** : a pathname designator.   
- **date** : a universal time or nil.   


### Description
Returns a universal time representing the time at which the file specified by pathspec was last written (or created), or returns nil if such a time cannot be determined.



### Examples
```lisp 
(with-open-file (s "noel.text" 
                    :direction :output :if-exists :error)
   (format s "~&Dear Santa,~2%I was good this year.  ~
                Please leave lots of toys.~2%Love, Sue~
             ~2%attachments: milk, cookies~%")
   (truename s))
=>  #P"CUPID:/susan/noel.text"
 (with-open-file (s "noel.text")
   (file-write-date s))
=>  2902600800
```
