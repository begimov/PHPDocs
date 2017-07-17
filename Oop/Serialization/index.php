<?php
require_once('A.php');

$a = new A;
$s = serialize($a);
var_dump($s);
file_put_contents('store', $s);

$s = file_get_contents('store');
var_dump($s);
$a = unserialize($s);
var_dump($a);
$a->show_one();
