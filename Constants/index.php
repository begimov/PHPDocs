<?php

namespace A\B\C;

define("CONSTANT", "CONSTANT");
echo CONSTANT;

function get()
{
    echo CONSTANT;
}

get();

class MyClass
{
    public function get()
    {
        echo __CLASS__ . "</br>";
        echo CONSTANT;
        echo __FUNCTION__ . "</br>";
        echo __METHOD__ . "</br>";
    }
}

$obj = new MyClass();
$obj->get();
echo "</br>";

echo __LINE__ . "</br>";
echo __FILE__ . "</br>";
echo __DIR__ . "</br>";
echo __NAMESPACE__ . "</br>";
echo MyClass::class . "</br>";
