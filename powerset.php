<?php

function powerset($array) {

    if (empty($array) || !is_array($array)) {
        return false;
    }

    $count = count($array);
    $eleCount = pow(2, $count);
    $output = array();

    for ($i = 0; $i < $eleCount; $i++) {
        $binaryData = sprintf("%0{$count}b", $i);
        $tmp = "";
        for ($j = 0; $j < $count; $j++) {
            $isShow = $binaryData[$j];
            
            if ($isShow === "1") {
                $tmp .=$array[$j];
            }
        }
        $output[] = $tmp;
    }
    return $output;
}

$x = powerset(array('a', 'b', 'c', 'd'));

echo "<pre>";
print_r($x) ; 

 
