<?php
$days = Array('Воскресенье','Понедельник','Вторник','Среда','Четверг','Пятница','Суббота');
$day = 'Понедельник';
foreach ($days as $key => $Cur_day){
    if (isset($day)){
        if ($Cur_day === $day){
            echo '<i>'.$Cur_day.'</i><br>';

        } else {
            echo $Cur_day.'<br>';
        }
    } else {
        if ($key == $days[ date( "w" )]){
            echo '<i>'.$Cur_day.'</i><br>';

        } else {
            echo $Cur_day.'<br>';
        }
    }
}