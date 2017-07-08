<?php

function test() {
  // return 1;
}
echo '<pre>';
var_dump(test());

$a = 1;

function &returnRef(&$a): string {
  $a++;
  return $a;
}
$newRef =& returnRef($a);
var_dump($newRef);
$newRef++;
$a += 2;
var_dump($newRef, $a);
