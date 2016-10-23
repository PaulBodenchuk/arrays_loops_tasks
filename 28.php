<?php
for ($i = 1;  $i <= 10; $i++){
    echo "<div style='float: left; margin-right: 30px'>";
    for ($j = 1; $j <= 10; $j++){
        echo "{$i} x {$j} = ".($j*$i)."<br>";
    }
    echo "</div>";

}
echo "<div style='clear: both'></div>";