<?php

declare(ticks=1);
// declare(encoding='ISO-8859-1');

function tick_handler()
{
    echo 'tick handled</br>';
}

register_tick_function('tick_handler');

$a = 1;
// return;
if ($a > 0) {
    $a += 2;
    print($a);
    echo '1';
    tick_handler();
}
