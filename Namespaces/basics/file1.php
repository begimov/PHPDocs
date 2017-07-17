<?php
namespace Foo\Bar\subnamespace;

const FOO = 1;
function foo() {echo __NAMESPACE__.'<br>';}
class Foo
{
    static function staticMethod() {echo __NAMESPACE__.'<br>';}
}
echo __NAMESPACE__.'<br>';
