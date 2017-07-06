<?php

function my_callback() {
    echo "my_callback";
}

class MyClass {
    static function myCallback() {
        echo "myCallback";
    }
}

call_user_func('my_callback');
call_user_func(array('MyClass', 'myCallback'));
call_user_func('MyClass::myCallback');

$obj = new MyClass;
call_user_func(array($obj, 'myCallback'));
echo "</br>";

class A {
    public static function who()
    {
        echo "A";
    }
}

class B extends A {
    public static function who()
    {
        parent::who();
        echo "B";
    }
}

call_user_func(array('B', 'parent::who'));
call_user_func(array('B', 'who'));
echo "</br>";

class C {
    public function __invoke($name)
    {
        echo "string" . $name;
    }
}
$obj = new C();
call_user_func($obj, 'AAA');
echo "</br>";

$double = function($a) {
    return $a ** 2;
};
$nums = range(1, 5);
$new_nums = array_map($double, $nums);

echo implode(' ', $new_nums);
