<?php

namespace Foo\Bar;
require_once 'file1.php';

echo __NAMESPACE__.'<br>';

const FOO = 2;
function foo() {echo __NAMESPACE__.'<br>';}
class Foo
{
    static function staticMethod() {echo __NAMESPACE__.'<br>';}
}

foo();
foo::staticMethod();
subnamespace\foo();
subnamespace\foo::staticMethod();

\Foo\Bar\foo();
\Foo\Bar\subnamespace\foo();

function strlen() {
    echo "string";
}

var_dump(\strlen('hi'));
