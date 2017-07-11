<?php
// require_once('Classes/MyClass1.php');
spl_autoload_register(function($className) {
    require_once 'Classes/'.$className.'.php';
});
echo "<pre>";
$obj  = new MyClass1();
var_dump($obj);
