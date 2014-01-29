<?php

/*
 * 
 * Write a method to replace all spaces in a string with ‘%20’.
 * 
 */

function replaceSpace($str1, $str2) {
    assert(is_string($str1));
    assert(is_string($str2));

    $len1 = strlen($str1); //Actual string 
    $len2 = strlen($str2); //Replace character string

    if ($len1 == 0 || $len2 == 0 ) {
        return $str1;
    }
    
    $totalNoOfSpace = 0; 
    //finding space 
    for($start = 0 ; $start < $len1 ; $start ++ ) { 
        if($str1[$start] == ' ') { 
            $totalNoOfSpace  ++ ;
        }
    }
    
    
    $newLen = ($len1 + ($len2 -1 )* $totalNoOfSpace ) -1;
    $str3 =$str1;
    $oldend = strlen($str1) -1; 
    for($newend = $newLen ; $newend >= 0 ; ) { 
        if($str1[$oldend] == ' '){ 
            for ($rend = $len2 -1 ; $rend >= 0; $rend-- ) { 
                $str3 [$newend--] =$str2 [$rend]; 
            }
        }else  { 
            $str3 [$newend--] = $str1 [$oldend];
        }
        $oldend --;
    }
    
    return $str3; 
}


echo replaceSpace (" Hri shike sh ", '%20');  


