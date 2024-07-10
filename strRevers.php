// How to reverse a string without using predefined functions in php
<?php 

function strReverse($str){
    
    $reverse='';
    $i=0;
    while(isset($str[$i])){
        print_r($str[$i]);exit;
        $reverse=$str[$i].$reverse;
        $i++;

    }
    return $reverse;

}

$string='Hello World';
echo strReverse($string);

?>