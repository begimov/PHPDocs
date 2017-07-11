<?php

define(BR, '</br>');

class SimpleClass
{
    const CONSTANT = 'constant1';
    public $var1 = array(1,2);
    public $var2 = self::CONSTANT;
    public $bar = <<<'EOT'
bar
EOT;
   public $baz = <<<EOT
baz
EOT;

    public function __construct()
    {
        // $this->var2 = 0;
        echo "{$this->var1[1]}" . BR . "{$this->var2}" . BR;
        echo $this->bar, $this->baz;
    }
}
new SimpleClass();
