<?php
$arr = Array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($arr as $number) {
    //$result += $number*$number;
    $result += pow ( $number, 2 );
}
echo 'Summ = '.$result;
