<?php

$tickets_arr = Array();

$ticket1 = Array('from' => 'Kiev', 'to' => 'London');
$ticket2 = Array('from' => 'London', 'to' => 'Odessa');
$ticket3 = Array('from' => 'Odessa', 'to' => 'Lvov');
$ticket4 = Array('from' => 'Lvov', 'to' => 'Rovno');
$ticket5 = Array('from' => 'Rovno', 'to' => 'Kharkov');
$ticket6 = Array('from' => 'Kharkov', 'to' => 'Izmail');

$tickets_arr[] = $ticket1;
$tickets_arr[] = $ticket2;
$tickets_arr[] = $ticket3;
$tickets_arr[] = $ticket4;
$tickets_arr[] = $ticket5;
$tickets_arr[] = $ticket6;

shuffle($tickets_arr);

echo '<pre>';
print_r ($tickets_arr);
echo "</pre>";

$start_point_index = 0;

//нахождения первого элемента массива (индекс из старого)
for ($i = 0; $i < count($tickets_arr); $i++){
    $start_destination_Point = $tickets_arr[$i]['from'];
    $flag_first = true;

    foreach ($tickets_arr as $ticket){

        if ($start_destination_Point == $ticket['to']) {
            $flag_first = false;
        }
    }

    if($flag_first){
        $start_point_index = $i;
    }
}

$result_arr = array();
$result_arr[] = $tickets_arr[$start_point_index];

//наполнение отсортированного масива
while(count($tickets_arr) != count($result_arr)){

    for ($j = 0; $j < count($tickets_arr); $j++){

        if ($tickets_arr[$j]['from'] == $result_arr[count($result_arr) - 1]['to']){
            $result_arr[] = $tickets_arr[$j];
        }
    }
}

echo '<pre>';
print_r ($result_arr);
echo "</pre>";
