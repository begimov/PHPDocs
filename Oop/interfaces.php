<?php
interface ITemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

class Template implements ITemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
    public function getHtml($template)
    {
        foreach ($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
        return $template;
    }
}

abstract class Bad implements ITemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
}
abstract class Bad2 extends Bad {}

interface a
{
    public function foo();
}
interface b extends a
{
    public function baz (Baz $baz);
}
class c implements b
{
    public function foo()
    {
    }

    public function baz(Baz $baz)
    {
    }
}

interface d
{
    const b = 'CONST';
}
echo d::b;
