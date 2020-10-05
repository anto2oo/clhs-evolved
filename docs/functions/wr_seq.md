<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function WRITE-SEQUENCE

### Syntax
`write-sequence sequence stream &key start end => sequence`  
`sequence---a sequence.`  
`stream---an output stream.`  
`start, end---bounding index designators of sequence. The defaults for start and end are 0 and nil, respectively.`  


### Arguments and Values


### Description
write-sequence writes the elements of the subsequence of sequence bounded by start and end to stream.



### Examples
```lisp 
(write-sequence "bookworms" *standard-output* :end 4)
 >>  book
 =>  "bookworms"Side Effects:
Modifies stream.
```
