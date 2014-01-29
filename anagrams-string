<?php

/*
 * 
 * Write a method to decide if two strings are anagrams or not.
 * 
 */

function anagramsCheck($str1, $str2) {
    assert(is_string($str1));
    assert(is_string($str2));

    $len1 = strlen($str1);
    $len2 = strlen($str2);

    if ($len1 != $len2) {
        return false;
    }

    $uniqueChar = array();
    $noOfUniqueChar = 0;
    $completeChar = 0;
    for ($start = 0; $start < $len1; $start++) {
        $char = $str1[$start];
        if (!isset($uniqueChar[$char])) {
            $uniqueChar[$char] = 0;
            $noOfUniqueChar++;
        }

        $uniqueChar[$char]++;
    }

    
    for ($start = 0; $start < $len2; $start++) {
        
        $char = $str2[$start];
        
        if (!isset($uniqueChar[$char])) {
            return false;
        }
        $uniqueChar[$char]--;

        if ($uniqueChar[$char] == 0) {
            $completeChar ++;
            if($completeChar == $noOfUniqueChar ) { 
                return ($start == strlen($str2) - 1 ) ; 
            }
        }
    }
    return false;
}

echo anagramsCheck("hrishikesh", "hrishkeshi");

