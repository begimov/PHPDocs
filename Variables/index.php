<?php

$foo = "FOO";
$bar = &$foo;
$bar = 'FOOBAR';
echo $foo;

$a = 1;
function test()
{
    // $a = 2;
    global $a;
    echo $a;
}
test();
echo '</br>';

echo '<pre>';
var_dump($GLOBALS);

function test2()
{
    static $a = 0;
    echo $a;
    $a++;
}
for ($i=0; $i < 20; $i++) {
    test2();
}
echo '</br>';

function test3()
{
    static $count = 0;
    $count++;
    echo $count;
    if ($count < 10) {
        test3();
    }
    $count--;
}
test3();
echo '</br>';

$a = "A1";
$$a = 'AA';
echo $$a, '</br>';

class MyClass {
    var $bar = 'Bar';
    var $arr = array(1, 2, 3);
    var $r = 'R';
}
$obj = new MyClass();
$prp = 'bar';
$prpArr = ['bar', 'arr', 'r'];
var_dump($obj->$prp);
var_dump($obj->{$prpArr[1]});
