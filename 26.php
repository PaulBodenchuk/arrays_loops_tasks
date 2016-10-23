<?php
$arr = Array();
for ($i = 0; $i < 20; $i++){
    $arr[$i] = rand(-50,50);
}
echo '<pre>';
print_r($arr);
echo '</pre>';

$mult = 1;

for ($i = 0; $i < count($arr); $i += 2){
    if($arr[$i] > 0){
        $mult *= $arr[$i];
    }
}
echo "Multiplication result: {$mult}<br>";
for ($i = 1; $i < count($arr); $i += 2){
    if($arr[$i] < 0){
        echo "index: {$i} value:  {$arr[$i]}<br>";
    }
}