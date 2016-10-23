<?php
$inputValue = 11112113;
$numberToSearch = 1;
$count = 0;
for ($i = $inputValue; $i > 1; $i/=10){
    if ($i%10 == $numberToSearch){
        //echo "i = {$i} i%10 = ".($i%10)."<br>";
        $count++;
    }
}
echo "В числе {$inputValue} цифра {$numberToSearch} встречается {$count} раз(а)" ;