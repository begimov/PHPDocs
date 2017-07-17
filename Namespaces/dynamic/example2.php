<?php

namespace namespacename;

class classname
{
    function __construct()
    {
        echo __METHOD__,"!!!!\n";
    }
}
function funcname()
{
    echo __FUNCTION__,"!!!!!\n";
}
const constname = "namespaced";

require_once 'example1.php';

$a = 'classname';
$obj = new $a;
$b = 'funcname';
$b();
echo constant('constname'), "<br>";

$a = 'namespacename\classname';
$obj = new $a;
$b = 'namespacename\funcname';
$b();
