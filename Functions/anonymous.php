<?php

const BR = '</br>';

echo '<pre>';

echo preg_replace_callback('~\+([a-z])~',function($match) {
    return strtoupper($match[1]);
}, 'hello+world').BR;

function echoS($s) {
   echo $s.BR;
};

$funcName = 'echoS';

echoS('dgdg111');
$funcName('NAME');

var_dump($echoS = function($s) {
    echo "$s".BR;
});

$echoS('dfga2222');

$msg = 'hello';

$exmpl = function () {
    var_dump($msg).BR;
};
$exmpl();

$exmpl = function () use ($msg) {
    var_dump($msg).BR;
};
$exmpl();

$msg = 'world';
$exmpl();

$msg = 'hello';

$exmpl = function ($arg = '') use (&$msg) {
    var_dump($arg . $msg).BR;
};
$exmpl();

$msg = 'world';
$exmpl('AAA');

class Cart
{
    const PRICE_BUTTER = 1.00;
    const PRICE_MILK = 3.00;
    const PRICE_EGGS = 6.95;

    protected $products = array();

    public function add($product, $quantity)
    {
        $this->products[$product] = $quantity;
    }

    public function getQuantity($product)
    {
        return (isset($this->products[$product])) ? $this->products[$product] : FALSE;
    }

    public function getTotal($tax)
    {
        $total = 0;

        $callback = function ($quantity, $product) use ($tax , &$total)
        {
            $pricePerItem = constant(__CLASS__ . "::PRICE_" . strtoupper($product));
            $total += ($pricePerItem * $quantity) * ($tax + 1.0);
        };
        array_walk($this->products, $callback);
        return round($total, 2);
    }
}

$myCart = new Cart();

$myCart->add('butter', 1);
$myCart->add('milk', 3);
$myCart->add('eggs', 6);

print $myCart->getTotal(0.05) . BR;

class Test
{
    public function testing()
    {
        return function() {
            var_dump($this);
        };
    }
}

$obj = new Test();
$func = $obj->testing();
$func();

class Foo
{
    function __construct()
    {
        $func = static function() {
            var_dump($this);
        };
        $func();
    }
}

new Foo();

$func = static function () {
    //
};
$func = $func->bindTo(new StdClass);
$func();
