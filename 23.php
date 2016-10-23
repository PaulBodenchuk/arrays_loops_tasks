<?php
$inputValue = 'u123';
$summ = 0;
/*
 * возвращает почему-то true при некорректном числе!!!!!!!!!!!!
 * var_dump($inputValue == (int)$inputValue);
 */

if ($inputValue == (string)(int)$inputValue){
    for ($i = 0; $i < strlen($inputValue); $i++){
        $summ += (int)$inputValue{$i};
    }
    echo $summ;
} else {
    echo 'Не корректное число!';
}
