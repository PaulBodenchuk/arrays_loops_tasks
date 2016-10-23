<?php
$snum = 0;
$n = 1000;
for (;$n > 50; $n = $n /2){
    $snum++;
}
echo 'Number of divisions: '.$snum.'<br>';
echo 'Number: '.$n;