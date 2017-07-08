<?php

const BR = '</br>';

function foo()
{
    echo "foo";
}

function bar()
{
    echo "bar";
}

$arr = ['foo', 'bar'];

foreach ($arr as $value) {
    $value();
}

class MyClass
{
    public function set()
    {
        $name = 'get';
        $this->$name();
    }

    public function get()
    {
        echo "GET!".BR;
    }
}

$obj = new MyClass();
$funcName = 'set';
$obj->$funcName();

class Foo
{
      static $var = 'Static var'.BR;
      static function Var()
      {
          echo 'Function Var'.BR;
      }
}
$var = 'Var';
echo Foo::$var;
Foo::$var();

class Bar
{
    static function foo()
    {
        echo "foo!".BR;
    }
    function baz()
    {
        echo "baz!".BR;
    }
}
['Bar', 'foo']();
$f = [new Bar(), 'baz'];
$f();
$f = 'Bar::foo';
$f();
