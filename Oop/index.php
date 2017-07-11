<?php
namespace NS;
const BR = '</br>';
echo '<pre>';
class SimpleClass
{
    public $var = 'default';

    public function displayVar()
    {
        echo $this->var.BR;
    }
}
$obj = new SimpleClass();
$obj->displayVar();

class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this defined ' . get_class($this) . BR;
        } else {
            echo '$this not defined'.BR;
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}
$a = new A();
$a->foo();
A::foo();
$b = new B();
$b->bar();
B::bar();

$inst = new SimpleClass();
var_dump($inst);
$className = 'NS\SimpleClass';
$inst = new $className();
var_dump($inst);

$assigned = $inst;
$inst->var = 'changed';
var_dump($assigned);

$ref =& $inst;
$inst->var = 'changed2';
var_dump($ref);
$inst = null;
var_dump($inst);
var_dump($assigned);
var_dump($ref);
echo BR.BR;

class Test
{
    public static function getNew()
    {
        return new static;
    }
}
class Child extends Test
{}
$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);

$obj3= Test::getNew();
var_dump($obj3);
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4);
var_dump($obj4 instanceof Test && $obj4 instanceof Child);
echo BR.BR;

//
class Foo
{
    public $bar = 'property';
    public function bar()
    {
        return 'method';
    }
}
$obj = new Foo();
echo $obj->bar . BR . $obj->bar().BR;

class O
{
    public $prop;
    public function __construct()
    {
        $this->prop = function () {
            echo "string".BR;
        };
    }
}
$obj = new O();
($obj->prop)();
$f = $obj->prop;
$f();

class ExtClass extends SimpleClass
{
    public function displayVar($value='')
    {
        echo 'ExtClass displayVar'.$value.BR;
        parent::displayVar();
    }
}
$obj = new ExtClass();
$obj->displayVar('sdfsd');

class ClassName {
}
echo ClassName::class;
