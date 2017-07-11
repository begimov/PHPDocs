<?php

define(BR, '</br>');

class MyClass
{
    const CONSTANT = 'constant1';

    public function showConst()
    {
        echo self::CONSTANT.BR;
    }
}
$obj = new MyClass();
$obj->showConst();
$name = 'MyClass';
echo MyClass::CONSTANT.BR;
echo $name::CONSTANT.BR;
echo $obj::CONSTANT.BR;

const ONE = 1;
class Foo
{
    const TWO = ONE * 2;
    const THREE = self::TWO + ONE;
    public static function show()
    {
        echo self::TWO.BR.self::THREE.BR;
    }
}
(new Foo())->show();
Foo::show();
