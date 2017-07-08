<?php
// require_once "./01.php";
var_dump($b);
$a = require_once "./01.php";
var_dump(require_once "./01.php");
echo $a, '</br>';
echo $b, '</br>';

function foo()
{
    global $a;
    echo $a;
}

foo();
