<?php
/*
for($i = 1; $i<=9; $i++){
    for ($j = 0; $j <= $i; $j++){
        echo 'x';
    }
    echo '<br>';
}
*/
$i = 1;
while ($i<=9){
    $j = 0;
    while ($j <= $i){
        echo 'x';
        $j++;
    }
    echo '<br>';
    $i++;
}
