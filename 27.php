<?php
$rows = 5;
$cols = 8;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
echo "<table>";
for ($row = 1;  $row <= $rows; $row++){
    echo "<tr>";
    for ($col = 1;  $col <= $cols; $col++){
        echo "<td bgcolor={$colors[rand(0, count($colors) - 1)]}>";
        echo rand(0, 10000);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
