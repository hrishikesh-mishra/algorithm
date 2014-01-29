<?php

/*
 *
 * Design an algorithm and write code to remove the duplicate characters in a string 
 * without using any additional buffer. NOTE: One or two additional variables are fine.
 * An extra copy of the array is not. 
 * 
 */
 
 
function removeDuplicateChar ($str) { 
    assert(is_string($str)); 
    
    $start = 0 ; 
    $end = strlen($str) -1;
    
 
    while ($start < $end  ) { 
        
        $isDuplicateFound = false; 
        
        for($second =  $start +1 ; $second <= $end ; $second ++ ) { 
            
            if($str[$start] == $str[$second]){ 
                $isDuplicateFound  = true;
                break;      
            }
        }
         
      
        if($isDuplicateFound) {             
            for($rev = $second ; $rev < $end; $rev++) {
                $str[$rev] = $str[$rev +1];
            }
            
            $str[$rev]  = null;
            $str = trim($str);
            $end = strlen($str)-1;
           
        } else { 
             $start ++ ;
        }
        
    }
    
    return $str ; 
    
    
}

echo removeDuplicateChar("hrishikesh");

