<?php

class Test
{
    public static function staticMethod() {
        echo 'STATIC';
    }
}
Test::staticMethod();
$name = 'Test';
$name::staticMethod();

class Foo
{
    public static $my_static = 'foo';

    public function staticValue()
    {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic()
    {
        return parent::$my_static;
    }
}

echo Foo::$my_static;
$foo = new Foo();
echo $foo->staticValue();
// echo $foo->my_static;
echo $foo::$my_static;
$name = 'Foo';
echo $name::$my_static;
echo Bar::$my_static;
$bar = new Bar();
echo $bar->fooStatic();
