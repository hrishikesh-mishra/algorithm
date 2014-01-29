<?php

/*
 * 
 * Implement an algorithm to determine if a string has all unique characters. 
 * What if you can not use additional data structures?
 * 
 */
 
function isUniqueChar ($str) { 
    
    assert(is_string($str)) ; 
    $unqiueChar  = array () ; 
    $len = strlen($str) ; 
    
    for($i = 0 ; $i < $len ;  $i++) { 
        $char = $str[$i];
        if(in_array($char, $unqiueChar)) { 
            return false;
        }else { 
            $unqiueChar [$char] = $char; 
        }
    }
    
    return true;
    
}


echo isUniqueChar("abcde");
