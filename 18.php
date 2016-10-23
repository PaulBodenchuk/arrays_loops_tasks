<?php
$days = Array('Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье');
foreach ($days as $key => $day){
    if ($key == 5 or $key == 6){
        echo '<b>'.$day.'</b><br>';

    } else {
        echo $day.'<br>';
    }
}