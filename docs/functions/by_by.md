<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function BYTE, BYTE-SIZE, BYTE-POSITION

### Syntax
`byte size position => bytespec`  
`byte-size bytespec => size`  
`byte-position bytespec => position`  


### Arguments and Values
- **size, position** : a non-negative integer.   
- **bytespec** : a byte specifier.   


### Description
byte returns a byte specifier that indicates a byte of width size and whose bits have weights 2^position + size - 1 through 2^position, and whose representation is implementation-dependent.  
byte-size returns the number of bits specified by bytespec.  
byte-position returns the position specified by bytespec.



### Examples
```lisp 
(setq b (byte 100 200)) =>  #<BYTE-SPECIFIER size 100 position 200>
 (byte-size b) =>  100
 (byte-position b) =>  200
```
