<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function STRING-UPCASE, STRING-DOWNCASE, STRING-CAPITALIZE, NSTRING-UPCASE, NSTRING-DOWNCASE, NSTRING-CAPITALIZE

### Syntax
`string-upcase string &key start end => cased-string`  
`string-downcase string &key start end => cased-string`  
`string-capitalize string &key start end => cased-string`  
`nstring-upcase string &key start end => string`  
`nstring-downcase string &key start end => string`  
`nstring-capitalize string &key start end => string`  


### Arguments and Values
- **string** : a string designator. For nstring-upcase, nstring-downcase, and nstring-capitalize, the string designator must be a string.   
- **start, end** : bounding index designators of string. The defaults for start and end are 0 and nil, respectively.   
- **cased-string** : a string.   


### Description
string-upcase, string-downcase, string-capitalize, nstring-upcase, nstring-downcase, nstring-capitalize change the case of the subsequence of string bounded by start and end as follows:  
For string-upcase, string-downcase, and string-capitalize, string is not modified. However, if no characters in string require conversion, the result may be either string or a copy of it, at the implementation's discretion.



### Examples
```lisp 
(string-upcase "abcde") =>  "ABCDE"
 (string-upcase "Dr. Livingston, I presume?")
=>  "DR. LIVINGSTON, I PRESUME?"
 (string-upcase "Dr. Livingston, I presume?" :start 6 :end 10)
=>  "Dr. LiVINGston, I presume?"
 (string-downcase "Dr. Livingston, I presume?")
=>  "dr. livingston, i presume?"

 (string-capitalize "elm 13c arthur;fig don't") =>  "Elm 13c Arthur;Fig Don'T"
 (string-capitalize " hello ") =>  " Hello "
 (string-capitalize "occlUDeD cASEmenTs FOreSTAll iNADVertent DEFenestraTION")
=>   "Occluded Casements Forestall Inadvertent Defenestration"
 (string-capitalize 'kludgy-hash-search) =>  "Kludgy-Hash-Search"
 (string-capitalize "DON'T!") =>  "Don'T!"    ;not "Don't!"
 (string-capitalize "pipe 13a, foo16c") =>  "Pipe 13a, Foo16c"

 (setq str (copy-seq "0123ABCD890a")) =>  "0123ABCD890a"
 (nstring-downcase str :start 5 :end 7) =>  "0123AbcD890a"
 str =>  "0123AbcD890a"Side Effects:
 nstring-upcase, nstring-downcase, and nstring-capitalize modify string as appropriate rather than constructing a new string.
```
