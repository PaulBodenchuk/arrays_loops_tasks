<?php
$arr = Array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$count = 1;

/*
 * $resultLine = '';
foreach ($arr as $value){
    if ($count%3 != 0) {
        $resultLine .= ', '.$value;
    } else {
        $resultLine .= $value;
    }
    $count++;
}
$resultArr = explode(',',$resultLine);
foreach ($resultArr as $value){
    echo $value.',<br>';
}
*/
foreach ($arr as $value){
    if ($count%3 != 0) {
        echo $value.',<br>';
    } else {
        echo $value;
    }
    $count++;
}