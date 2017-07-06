<?php
var_dump(1 > 2 == 1);
$a = false ? 0 : true ? 1 : 2;
echo $a . "</br>";

$a = '12a';
echo +$a . "</br>";

echo $a = ($b = 5) + 10;
$b = 'B';
$a = 'A';
$b .= $a;
echo $b . '</br>';

$a = 4;
$b = &$a;
$a = 5;
echo $b;
