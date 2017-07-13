<?php
function bool2str($bool)
{
    return (string)$bool;
}

function compareObjects($o1, $o2)
{
    echo 'o1 == o2 : ' . bool2str($o1 == $o2) . '<br>';
    echo 'o1 != o2 : ' . bool2str($o1 != $o2) . '<br>';
    echo 'o1 === o2 : ' . bool2str($o1 === $o2) . '<br>';
    echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . '<br>';
}

class Flag
{
    public $flag;
    function Flag($flag = true) {
        $this->flag = $flag;
    }
}
class OtherFlag
{
    public $flag;
    function OtherFlag($flag = true) {
        $this->flag = $flag;
    }
}
$o = new Flag();
$p = new Flag();
$q = $o;
$r = new OtherFlag();

echo "Два экземпляра одного и того же класса<br>";
compareObjects($o, $p);

echo "\nДве ссылки на один и тот же экземпляр<br>";
compareObjects($o, $q);

echo "\nЭкземпляры двух разных классов<br>";
compareObjects($o, $r);
