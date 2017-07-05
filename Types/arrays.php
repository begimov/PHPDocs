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
echo count($arr3).BR;
$index = 0;
echo $arr3["$index"].BR;

$arr = array('fruit' => 'apple', 'veggie' => 'carrot');
echo $arr[fruit].BR;
const fruit = 'veggie';
echo $arr[fruit].BR;
echo "$arr[fruit]".BR;
echo "{$arr[fruit]}".BR;
print_r((array)'text00');
print_r(array('text00'));
echo BR;

class A {
    private $A0 = 0;
    private $A1;
    protected $A2;
    public $A3;
}
var_dump((array) new A);
var_dump((array)null);
echo BR;

$colors = array('red', 'blue', 'green', 'yellow');
foreach ($colors as $color) {
    echo "$color ";
}

foreach ($colors as &$color) {
    $color = strtoupper($color);
}
unset($color);

// foreach ($colors as $key => $value) {
//     $colors[$key] = strtoupper($value);
// }

foreach ($colors as $color) {
    echo "$color ";
}

$handle = opendir('..');
var_dump($handle);
while (($file = readdir($handle)) !== false) {
    $files[] = $file;
}
closedir($handle);
var_dump($files);

$arr = ['arr1' => [1,2,3], 'arr2' => [4,5,6]];
var_dump($arr['arr2'][0]);
$juices["apple"]["green"] = "good";
var_dump($juices);
echo BR;

$arr1 = [1,2];
$arr2 = &$arr1;
$arr2[] = 2;
$arr1[] = 1;
var_dump($arr1, $arr2);
echo BR;

$a = 1;
$b = $a;
$a = 2;
var_dump($a, $b);
