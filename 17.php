<?php
$months = Array('Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь');
foreach ($months as $month){
    if ($month == $months[ date( "n" ) - 1 ]){
        echo '<b>'.$month.'</b><br>';

    } else {
        echo $month.'<br>';
    }
}