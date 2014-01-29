<?php 

/*
 * Write code to reverse a String. 
 * 
 */
 
function reverseString($str) { 
    assert(is_string($str)); 
    $start = 0 ; 
    $end = strlen($str) -1; 
    while ($start < $end ) {
        $tmp = $str[$start] ; 
        $str[$start++] = $str[$end] ; 
        $str[$end--] = $tmp;
    }
    
    return $str ; 
    
}

echo reverseString("abcde");
