<?php
$a = ['a' => 1,'b' => 2];
$b = ['c' => 1, 'd' => 2];
var_dump($a + $b);
var_dump($a == $b);
echo '</br>';

class MyClass
{
}

class NotMyClass
{
}

$obj = new NotMyClass;

var_dump($obj instanceof MyClass);
var_dump($obj instanceof NotMyClass);

class ParentClass {}
class ChildClass extends ParentClass {}

var_dump(new ChildClass instanceof ParentClass);
