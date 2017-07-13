<?php

$x = true;
$y = false;
$z = $y or $x;
var_dump($z);
$z = ($y or $x);
var_dump($z);

$z = $y || $x;
var_dump($z);

echo "!!!!!!!!!!";

var_dump(0 == 1);
var_dump(0 == (bool)'all');
var_dump(0 == 'all');
var_dump(0 === 'all');
var_dump((string)0 == 'all');

echo "!!!!!!!!!!";

var_dump((bool)'0.00');

function remove_elements($element, $array)
{
    $index = array_search($element, $array);
}
