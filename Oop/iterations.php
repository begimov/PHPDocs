<?php

class MyClass
{
    public $var1 = 1;
    public $var2 = 2;
    public $var3 = 3;

    protected $var4 = 'protected';
    private $private = 'private';

    public function iterateVisible()
    {
        echo get_class($this) . '::iterateVisible<br>';
        foreach ($this as $key => $value) {
            echo "$key => $value<br>";
        }
    }
}
$o = new MyClass();
$o->iterateVisible();

foreach ($o as $key => $value) {
    echo "$key => $value<br>";
}

class MyIterator implements Iterator
{
    private $var = array();

    public function __construct($array)
    {
        if (is_array($array)) {
            $this->var = $array;
        }
    }
    public function rewind()
    {
        echo 'rewind<br>';
        reset($this->var);
    }
    public function current()
    {
        $var = current($this->var);
        echo "current: $var<br>";
        return $var;
    }
    public function key()
    {
        $var = key($this->var);
        echo "key: $var<br>";
        return $var;
    }
    public function next()
    {
        $var = next($this->var);
        echo "next: $var<br>";
        return $var;
    }
    public function valid()
    {
        $key = key($this->var);
        $var = ($key !== null && $key !== false);
        echo "right: $var<br>";
        return $var;
    }
}
$values = array(1,2,3);
$it = new MyIterator($values);
foreach ($it as $a => $b) {
    print "$a: $b<br>";
}
