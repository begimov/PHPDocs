<?php

class Test
{
    public $foo;
    public function __construct($foo)
    {
        $this->foo = $foo;
    }
    public function __toString()
    {
        return 'FOO:'.$this->foo;
    }
}
$o = new Test('AAAA');
echo $o;
$s = "BBBB $o";
var_dump($s);

class CallableClass
{
    public function __invoke($x)
    {
        var_dump($x);
    }
}
$o = new CallableClass();
$o(12312);

class A
{
    public $var1;
    public $var2;
    public static function __set_state($array)
    {
        $obj = new self;
        $obj->var1 = $array['var1'];
        $obj->var2 = $array['var2'];
        return $obj;
    }
}
$a = new A;
var_dump($a);
$a->var1 = 1;
$a->var2 = 2;
eval('$b = ' . var_export($a, true) . ';');
var_dump($b);

class C
{
    private $prop;
    public function __construct($val)
    {
        $this->prop = $val;
    }
    public function __debugInfo()
    {
        echo "CALL";
        return [
            'pseudoProp' => 'pseudo'
        ];
    }
}
var_dump(new C(324));
