<?php

const BR = "</br>";

$arr = [
    false => 0,
    '1' => '1',
    null => 'null',
    2 => 2,
    true + 2 => true + 2,
    4 => 0b100,
    '5x' => 0x5,
    6.6 => 6.6,
    6.9 => 6.9,
    7,
];

echo var_dump($arr).BR;

foreach ($arr as $key => $value) {
    echo gettype($key) . " $key " . "=> " . gettype($value) . " $value" . BR;
}

echo var_dump($arr['gfh']).BR;

$arr2[] = 0;
$arr2[10] = 10;
$arr2[] = 11;
unset($arr2[10]);
echo var_dump($arr2).BR;
unset($arr2);
echo var_dump($arr2).BR;

$arr3 = array(0, 1, 2, 3);
echo var_dump($arr3).BR;
foreach ($arr3 as $key => $value) {
    unset($arr3[$key]);
}
echo var_dump($arr3).BR;
$arr3[] = 4;
echo var_dump($arr3).BR;
$arr3 = array_values($arr3);
echo var_dump($arr3).BR;
