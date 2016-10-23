<?php
$arr = Array(4, 2, 5, 19, 13, 0, 10);
$Element_exist = false;
foreach ($arr as $value){
    if($value >= 2 and $value <= 4){
        $Element_exist = true;
    }
}
if ($Element_exist){
    echo 'Есть!';
} else {
    echo 'Нет!';
}
