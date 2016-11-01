<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$count = 0;
$arr_keys = Array();


print_r($arr_keys);
print_r($arr_values);
$arr_values = Array();
foreach ($arr as $key => $value){
    $arr_keys[$count] = $key;
    $arr_values[$count] = $value;
    $count++;
}
/*
$arr_keys = array_keys($arr);
$arr_values = array_values($arr);
print_r($arr_keys);
print_r($arr_values);
*/

