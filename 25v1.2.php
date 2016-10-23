<?php
$arr = Array();
for ($i = 0; $i < 20; $i++){
    $arr[$i] = rand(0,100);
}
echo '<pre>';
print_r($arr);
echo '</pre>';
$arrTemp = $arr;
sort($arrTemp);

$min = $arrTemp[0];
$max = $arrTemp[count($arrTemp) - 1];

$indexMin = array_search($min, $arr);
$indexMax = array_search($max, $arr);

echo "MAX = {$max} index = {$indexMax}<br>";
echo "MIN = {$min} index = {$indexMin}<br>";

$arr[$indexMin] = $max;
$arr[$indexMax] = $min;
echo '<pre>';
print_r($arr);
echo '</pre>';