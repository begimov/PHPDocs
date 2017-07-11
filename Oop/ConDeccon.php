<?php

class MyDestructableClass {
   function __construct() {
       print "Конструктор</br>";
   }

   function __destruct() {
       print "Уничтожается " . get_class($this) . "<br>";
   }
}

$obj = new MyDestructableClass();

// exit();

 class Base
 {
    public function __construct()
    {
        echo "BASE</br>";
    }
 }
 class Sub extends Base
 {
    public function __construct()
    {
        echo "SUB</br>";
        parent::__construct();
    }
 }
class Some extends Base
{
    //
}
$obj = new Base();
$obj = new Sub();
$obj = new Some();
