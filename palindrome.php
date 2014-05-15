<?php



function palindrome($x) {
   
    if(empty($x)) { 
        return false; 
    }
    
    
    $l = strlen($x) - 1;
    $i = 0;
    
    while ($i < $l) {
        if ($x[$i] === $x [$l]) {
            $i ++ ;  $l--;
            continue;
        } else {
            return false;
        }
    }

    return true;
}



echo palindrome('radar');

