<?php
/*
*
* A good example with graphics is here: http://www.geeksforgeeks.org/write-a-c-program-to-print-all-permutations-of-a-given-string/
*
*/

function permutation($str, $i, $n) {
    if ($i == $n) {
        print $str . "<br />";
    } else {
        for ($j = $i; $j < $n; $j++) {
            $str = swap($str, $i, $j);
            permutation($str, $i + 1, $n);
             $str = swap($str, $i, $j);
        }
    }
}

function swap($str, $i, $j) {
    $tmp = $str[$i];
    $str[$i] = $str[$j];
    $str[$j] = $tmp;
    return $str;
} 

permutation("abcd", 0, strlen('abcd'));

