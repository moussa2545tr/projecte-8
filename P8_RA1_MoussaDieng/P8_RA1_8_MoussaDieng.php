<?php
$a = 5;
$b = 10;
echo "Abans: a = $a, b = $b<br>";
$temp = $a;
$a = $b;
$b = $temp;
echo "Després: a = $a, b = $b";
?>