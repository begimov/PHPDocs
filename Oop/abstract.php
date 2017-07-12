<?php

const BR = '</br>';

abstract class AbstractClass
{
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    public function printOut()
    {
        print $this->getValue().BR;
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return 'ConcreteClass1';
    }

    public function prefixValue($prefix)
    {
        return  "{$prefix}ConcreteClass1".BR;
    }
}

class ConcreteClass2 extends AbstractClass
{
    public function getValue() {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2".BR;
    }
}

$class1 = new ConcreteClass1();
$class1->printOut();
echo $class1->prefixValue('FOO_');

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_');

abstract class AbsClass
{
    abstract protected function prefixName($name);
}
class ConcreteClass3 extends AbsClass
{
    public function prefixName($name, $separator = '.')
    {
        if ($name == 'Pacman') {
            $prefix = 'Mr';
        } elseif ($name == 'Pacwoman') {
            $prefix = 'Mrs';
        } else {
            $prefix = '';
        }
        return "{$prefix}{$separator} {$name}";
    }
}
$class = new ConcreteClass3;
echo $class->prefixName('Pacman');
