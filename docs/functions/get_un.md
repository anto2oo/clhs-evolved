<!-- Generated on 05/10/2020 by https://github.com/anto2oo/clhs-evolved -->

# Function GET-UNIVERSAL-TIME, GET-DECODED-TIME

### Syntax
`get-universal-time <no arguments> => universal-time`  
`get-decoded-time <no arguments> => second, minute, hour, date, month, year, day, daylight-p, zone`  


### Arguments and Values
- **universal-time** : a universal time.   
- **second, minute, hour, date, month, year, day, daylight-p, zone** : a decoded time.   


### Description
get-universal-time returns the current time, represented as a universal time.  
get-decoded-time returns the current time, represented as a decoded time.



### Examples
```lisp 
;; At noon on July 4, 1976 in Eastern Daylight Time.
 (get-decoded-time) =>  0, 0, 12, 4, 7, 1976, 6, true, 5
;; At exactly the same instant.
 (get-universal-time) =>  2414332800
;; Exactly five minutes later.
 (get-universal-time) =>  2414333100
;; The difference is 300 seconds (five minutes)
 (- * **) =>  300Side Effects: None.
```
