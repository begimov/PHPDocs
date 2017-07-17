<?php

class classname
{
    public function __construct()
    {
        echo __METHOD__.'<br>';
    }
}
function funcname()
{
    echo __FUNCTION__.'<br>';
}
const constname = "CONSTANT VALUE";

$a = 'classname';
$obj = new $a();

$b = 'funcname';
$b();
echo constant('constname').'<br>';
