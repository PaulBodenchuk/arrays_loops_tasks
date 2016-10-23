<?php
$arr = Array();
for ($i = 0; $i < 20; $i++){
    $arr[$i] = rand(0,100);
}
echo '<pre>';
print_r($arr);
echo '</pre>';
$indexMin = 0;
$indexMax = 0;
$min = $arr[$indexMin];
$max = $arr[$indexMax];
for ($i = 1; $i < 20; $i++){
    if($min > $arr[$i]){
        $indexMin = $i;
        $min = $arr[$indexMin];
    }
    if($max < $arr[$i]) {
        $indexMax = $i;
        $max = $arr[$indexMax];
    }
}
echo "MAX = {$max} index = {$indexMax}<br>";
echo "MIN = {$min} index = {$indexMin}<br>";

$arr[$indexMin] = $max;
$arr[$indexMax] = $min;
echo '<pre>';
print_r($arr);
echo '</pre>';