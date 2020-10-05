<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function DEPOSIT-FIELD

### Syntax
`deposit-field newbyte bytespec integer => result-integer`  


### Arguments and Values
- **newbyte** : an integer.   
- **bytespec** : a byte specifier.   
- **integer** : an integer.   
- **result-integer** : an integer.   


### Description
Replaces a field of bits within integer; specifically, returns an integer that contains the bits of newbyte within the byte specified by bytespec, and elsewhere contains the bits of integer.



### Examples
```lisp 
(deposit-field 7 (byte 2 1) 0) =>  6
 (deposit-field -1 (byte 4 0) 0) =>  15
 (deposit-field 0 (byte 2 1) -3) =>  -7Side Effects: None.
```
