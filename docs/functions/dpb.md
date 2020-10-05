<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function DPB

### Syntax
`dpb newbyte bytespec integer => result-integerPronunciation:`  
`[,duh'pib] or [,duh'puhb] or ['dee'pee'bee]`  


### Arguments and Values
- **newbyte** : an integer.   
- **bytespec** : a byte specifier.   
- **integer** : an integer.   
- **result-integer** : an integer.   


### Description
dpb (deposit byte) is used to replace a field of bits within integer. dpb returns an integer that is the same as integer except in the bits specified by bytespec.  
Let s be the size specified by bytespec; then the low s bits of newbyte appear in the result in the byte specified by bytespec. Newbyte is interpreted as being right-justified, as if it were the result of ldb.



### Examples
```lisp 
(dpb 1 (byte 1 10) 0) =>  1024
 (dpb -2 (byte 2 10) 0) =>  2048
 (dpb 1 (byte 2 10) 2048) =>  1024Side Effects: None.
```
