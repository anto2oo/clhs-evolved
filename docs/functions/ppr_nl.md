<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function PPRINT-NEWLINE

### Syntax
`pprint-newline kind &optional stream => nil`  


### Arguments and Values
- **kind** : one of :linear, :fill, :miser, or :mandatory.   
- **stream** : a stream designator. The default is standard output.   


### Description
If stream is a pretty printing stream and the value of *print-pretty* is true, a line break is inserted in the output when the appropriate condition below is satisfied; otherwise, pprint-newline has no effect.  
Kind specifies the style of conditional newline. This parameter is treated as follows:  
When a line break is inserted by any type of conditional newline, any blanks that immediately precede the conditional newline are omitted from the output and indentation is introduced at the beginning of the next line. By default, the indentation causes the following line to begin in the same horizontal position as the first character in the immediately containing logical block. (The indentation can be changed via pprint-indent.)  
There are a variety of ways unconditional newlines can be introduced into the output (i.e., via terpri or by printing a string containing a newline character). As with mandatory conditional newlines, this prevents any of the containing sections from being printed on one line. In general, when an unconditional newline is encountered, it is printed out without suppression of the preceding blanks and without any indentation following it. However, if a per-line prefix has been specified (see pprint-logical-block), this prefix will always be printed no matter how a newline originates.



### Examples
```lisp 
See Section 22.2.2 (Examples of using the Pretty Printer).Side Effects:
Output to stream.
```
