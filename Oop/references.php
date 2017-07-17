<?php

class A
{
    public $foo = 1;
}
$a = new A();
$b = $a;
$b->foo = 2;
echo $a->foo . '<br>';
echo '!!!!!!!!!!!<br>';

$c = new A;
$d = &$c;
$d->foo = 2;
$d = null;
var_dump($d, $c);
echo $c->foo . '<br>';
echo '!!!!!!!!!!!<br>';

$e = new A;

function foo($obj)
{
    $obj->foo = 2;
    $obj = null;
    var_dump($obj);
}
foo($e);
echo $e->foo . '<br>';
