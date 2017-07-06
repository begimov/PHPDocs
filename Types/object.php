<?php

$obj = (object) array('foo');
var_dump($obj);
echo key($obj);
$obj2 = (object) "ob";
var_dump($obj2);
