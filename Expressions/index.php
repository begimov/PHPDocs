<?php

$b = $a = 4;

echo $a, $b;

echo $a += 10;

echo $a === '14' ? 'y' : 'n';

$f = ($a === 14) ? 'y' : 'n';
echo $f;
echo "</br>";

function double($i)
{
    return $i * 2;
}

$b = $a = 5;
$c = $a++;
$e = $d = ++$b;

$f = double($d++);
$g = double(++$e);
$h = $g += 10;
