<?php

spl_autoload_register(function($name) {
    echo "Loading...$name</br>";
    throw new Exception("Cant load $name");
});

try {
    $obj = new MyClass1();
} catch (Exception $e) {
    echo $e->getMessage().'</br>';
}
