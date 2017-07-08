<?php

define (BR, '</br>');

$arr = array(1,2,3);
foreach($arr as $key => &$value) {
    $value *= 2;
}
echo '<pre>';
var_dump($arr);
echo BR;

foreach ($arr as $key => $value) {
    echo "$key => $value".BR;
    print_r($arr);
}
unset($value);

reset($arr);
while(list($key, $value) = each($arr)) {
    echo $key, $value;
}
echo BR;

$i = 0;
foreach ($arr as $value) {
    echo "\$arr[$i] => $value ";
    $i++;
}
echo BR;

$a = array();
$a[0][0] = "00";
$a[0][1] = "01";
$a[1][0] = "10";
$a[1][1] = "11";

foreach ($a as $key1 => $value1) {
  foreach ($value1 as $key2 => $value2) {
      echo "\$a[$key1][$key2] => $value2 ";
  }
}
echo BR;

foreach($a as list($one, $two)) {
    echo "$one $two".BR;
}
