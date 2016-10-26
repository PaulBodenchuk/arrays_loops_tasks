<?php

$tickets_arr = Array(
    'Destination1' => 'Destination2',
    'Destination2' => 'Destination3',
    'Destination3' => 'Destination4',
    'Destination4' => 'Destination5',
    'Destination5' => 'Destination6',
    'Destination6' => 'Destination7',
    'Destination7' => 'Destination8',
    'Destination8' => 'Destination9',
    'Destination9' => 'Destination10',
    'Destination10' => 'Destination11'
);

$random_arr = Array();

// перемешивание массива:
for($i = 0; $i < count($tickets_arr); $i = $i){
    $rand_el = array_rand ($tickets_arr);
    $random_arr[$rand_el] = $tickets_arr[$rand_el];
    unset($tickets_arr[$rand_el]);
}
// Исходный массив со случайным расположением билетов
echo '<pre>';
print_r ($random_arr);
echo "</pre>";

//Поиск первого элемента, то есть ключа первго элемента массива
$keys = array_keys($random_arr);
$start_destination_Point_key = $keys[0];

foreach ($keys as $key){
    $start_destination_Point = $key;
    $flag_first = true;

    foreach ($random_arr as $point1 => $point2){

        if($point2 == $key){
            $flag_first = false;
        }
    }

    if($flag_first){
        $start_destination_Point_key = $key;
    }
}

$result_arr = array();
$result_arr[$start_destination_Point_key] = $random_arr[$start_destination_Point_key];
$start_destination_Point_value = $random_arr[$start_destination_Point_key];

$destination_Point_key = $start_destination_Point_key;
$destination_Point_value  = $start_destination_Point_value;

while (count($random_arr) != count($result_arr)){

    foreach ($random_arr as $point_key => $point_value){

        if ($point_key == $destination_Point_value){
            $destination_Point_key = $point_key;
            $destination_Point_value  = $point_value;
            $result_arr[$point_key] = $random_arr[$point_key];
            break;
        }
    }
}

// отсортированниый массив
echo '<pre>';
print_r ($result_arr);
echo "</pre>";