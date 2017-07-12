<?php

class PropertyTest
{
    private $data = array();
    public $declared = 1;
    private $hidden = 2;

    public function __set($name, $value)
    {
        echo "Установка '$name' в '$value'\n";
        $this->data[$name] = $value;
    }
    public function __get($name)
    {
        echo "Получение '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        $trace = debug_backtrace();
        trigger_error(
            'Неопределенное свойство в __get(): ' . $name .
            ' в файле ' . $trace[0]['file'] .
            ' на строке ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }
    public function __isset($name)
    {
        echo "Установлено ли '$name'?\n";
        return isset($this->data[$name]);
    }
    public function __unset($name)
    {
        echo "Уничтожение '$name'\n";
        unset($this->data[$name]);
    }
    public function getHidden()
    {
        return $this->hidden;
    }
}
echo "<pre>\n";
$obj = new PropertyTest;
$obj->a = 1;
echo $obj->a;
var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo $obj->hidden;

class MethodTest
{
    public function __call($name, $arguments)
    {
        echo "Вызов метода '$name' "
            . implode(', ', $arguments). "\n";
    }
    public function __callStatic($name, $arguments)
    {
        echo "Вызов статического метода '$name' "
            . implode(', ', $arguments). "\n";
    }
}
$o = new MethodTest();
$o->method('arg1', 2, [1,2,3]);
MethodTest::method();
$o::method();
