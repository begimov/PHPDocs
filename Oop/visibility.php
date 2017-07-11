<?php
const BR = '</br>';
echo '<pre>';
class A
{
    public $public = 'public';
    protected $protected = 'protected';
    private $private = 'private';
    public function show()
    {
        echo $this->public, $this->protected, $this->private , BR;
    }
}
$o = new A();
echo $o->public.BR;
// echo $o->protected.BR;
// echo $o->private.BR;
$o->show();

class B extends A
{
    public $public = 'publicB';
    protected $protected = 'protectedB';
    private $private = 'privateB';
  }
$o2 = new B();
echo $o2->public.BR;
// echo $o->protected.BR;
// echo $o->private.BR;
$o2->show();

class MyClass
{
    public function __construct() {}
    public function MyPublic() { echo "public"; }
    protected function MyProtected() { echo "protected"; }
    private function MyPrivate() { echo 'private'; }
    public function show()
    {
        echo $this->MyPublic().$this->MyProtected().$this->MyPrivate().'<br>';
    }
}
$o = new MyClass();
$o->MyPublic();
$o->show();
class MyClass2 extends MyClass
{
    public function MyPublic($value='dsfsdf')
    {
        echo $value.BR;
    }
    protected function MyProtected($value='asdasd')
    {
        echo $value.BR;
    }
    private function MyPrivate($value='ppppppp')
    {
        echo $value.BR;
    }
    public function show($value='!!!!!!!!!!!')
    {
        parent::show();
        echo $value;
    }
}
$o2 = new MyClass2();
$o2->show();

class Test
{
    private $foo = 'private';
    public function baz(Test $obj)
    {
        $obj->foo = 'private2';
        var_dump($obj->foo);
    }
}
$obj = new Test();
$obj->baz(new Test());
