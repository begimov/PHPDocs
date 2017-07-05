<?php

const BR = "</br>";
define('KOOLAID', 'koolaid1');
$juices = array("apple", "orange", KOOLAID => "purple");

echo "He $juices[0]".BR;
echo "He $juices[koolaid1]".BR;
var_dump($juices[koolaid1]);

class People {
    public $john = "John";
    public $jane = "Jane";
}

$people = new People;

echo "$people->john".BR;
echo "$people->john's$people->jane".BR;

$string = "string";
var_dump($string[1]);
$string[3] = 1;
echo "{\$string}".BR;

error_reporting(E_ALL);
$greatName = 'great';
$great = 'GREAT';
echo "IT's {$great}".BR;
echo "{$juices['koolaid1']}".BR;
echo "{${$greatName}}".BR;

function getName()
{
    return 'great';
}
echo "{${getName()}}" . getName() . BR;

class Foo {
    var $bar = 'BAR';
}
$foo = new Foo;
$bar = 'bar';
$baz = ['foo', 'bar'];
echo "{$foo->{$baz[1]}}".BR;

class Beers {
    const SOFTDRINK = 'rootbeer';
    public static $ale = "ipa";
}
$rootbeer = 'A&W';
$ipa = 'BBBB';
echo "I want {${Beers::SOFTDRINK}}".BR;
echo "I want {${Beers::$ale}}".BR;
echo "{${Beers::SOFTDRINK}{1}}".BR;
Beers::$ale[4] = '1';
var_dump(Beers::$ale);
var_dump(isset(Beers::$ale[10]));
var_dump(strlen(Beers::$ale));
echo true.BR;
echo "<pre>";
var_dump($juices);
print_r($juices);
echo "</pre>";
echo var_dump(serialize($juices)).BR;
echo var_dump(unserialize(serialize($juices))).BR;
