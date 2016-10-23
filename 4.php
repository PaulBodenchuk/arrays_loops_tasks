<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
echo '<h1>Keys</h1>';
foreach (array_keys($arr) as $key){
    echo '<p>'.$key.'</p>';
}
echo '<h1>Values</h1>';
foreach (array_values($arr) as $value){
    echo '<p>'.$value.'</p>';
}



