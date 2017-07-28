<?php

$nums = [1, 2, 3, 4, 2];

function add(int $i)
{
    echo 'Num of Args:', func_num_args(), '<br>';
    echo 'Arg 1:', func_get_arg(0), '<br>';

    // return array_reduce(func_get_args(), function($acc, $item) {
    //   return $acc + $item;
    // }, 0);

    return array_sum(func_get_args());
}

echo add(3, 1, 1, 2), '<br><br>';
