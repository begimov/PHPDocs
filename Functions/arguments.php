<?php

declare(strict_types=1);

$arr = arrayMap(array(1,2,3,4), function($item) {
    if ($item % 2 === 0) {
        return $item * 2;
    }
    return $item;
});

function arrayMap(array $arr, callable $f)
{
    define(BR, '</br>');
    foreach ($arr as &$value) {
        $value = $f($value);
    }
    return $arr;
}

echo '<pre>';
var_dump($arr);
echo BR;

function addSome(&$string)
{
    $string .= " + some";
}
$str = 'string';
addSome($str);
echo $str.BR;

function make($str = 'default')
{
    echo $str . '!!!' . BR;
}

make('sdfsdf');
make();
make(null);

function makecoffee($types = ['cappuccino'], $coffeMaker = null)
{
    $device = is_null($coffeMaker) ? 'hand' : $coffeMaker;
    $result;
    foreach ($types as $value) {
        $result .= $value . '/';
    }
    return "$result by $device";
}
echo makecoffee(array(1,2,3,4,5)).BR;

class MyClass
{
    public function get(self $value)
    {
        echo get_class($value), BR;
    }
}
$obj = new MyClass;
$obj->get($obj);

interface I
{
    public function f();
}
class A implements I
{
    public function f()
    {
        echo '!!!';
    }
}
function fun(I $i)
{
    echo get_class($i).BR;
}
fun(new A);
// fun(new MyClass);

function sum(int $a, int $b) {
    return $a + $b;
}
try {
    var_dump(sum(1,2));
    var_dump(sum('1',2));
} catch (TypeError $e) {
    // var_dump($e);
    echo "Error: {$e->getMessage()}".BR;
}

function summy(...$nums)
{
    return array_reduce($nums, function ($acc, $elem) {
        return $acc += $elem;
    }, 0);
}
echo summy(1,2,3,4).BR;

function add($num1, $num2 = 0)
{
    return $num1 + $num2;
}
echo add(...[11,32]).BR;

function f($num, int ...$nums)
{
    array_push($nums, $num);
    return $nums;
}
var_dump(f(1,2,3,4));
