<?php

var_dump(1 == '1a');
var_dump('1aaa'< '12a');
var_dump((int)'adfgd345345dfg');

echo 1 <=> 1;
echo 1 <=> 2;
echo 3 <=> 2;

var_dump(1 == TRUE);
var_dump(0 == FALSE);
var_dump(100 < TRUE);
var_dump(-10 < FALSE);
var_dump(min(-100, -10, NULL, 10, 100));
echo "</br>";

function standard_array_compare($op1, $op2)
{
    if (count($op1) < count($op2)) {
        return -1;
    } elseif (count($op1) > count($op2)) {
        return 1;
    }
    foreach ($op1 as $key => $val) {
        if (!array_key_exists($key, $op2)) {
            return null;
        } elseif ($val < $op2[$key]) {
            return -1;
        } elseif ($val > $op2[$key]) {
            return 1;
        }
    }
    return 0;
}

var_dump(standard_array_compare([2,2], [1,3]));
var_dump((bool)'dfg');
var_dump(null ?? 1);

$output = `dir`;
echo "<pre>$output</pre>";

$a = 'Z';
var_dump(++$a);
