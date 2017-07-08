<?php

const BR = '</br>';

$makefoo = true;

bar();

if ($makefoo)
{
    function foo()
    {
        echo 'foo'.BR;
    }
}

foo();

function bar()
{
    echo 'bar'.BR;
}

function one()
{
    function two()
    {
        echo 'two'.BR;
    }
}
one();
two();

function recursion($a)
{
    if ($a < 20) {
        echo $a;
        recursion($a + 1);
    }
}
recursion(1);
