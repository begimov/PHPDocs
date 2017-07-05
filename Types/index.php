<?php

$bool = 1;
const BR = "</br>";

if (is_bool($bool)) {
    echo 'BOOLEAN'.BR;
} else {
    echo 'SMTH ELSE'.BR;
}

$arr = [1];

if ('0') {
    echo "TRUE".BR;
} else {
    echo "FALSE".BR;
}

var_dump(0 == 'all');
var_dump(!0 + true);
echo -0123 * 2 . BR;
echo PHP_INT_SIZE . BR . PHP_INT_MAX . BR;
var_dump((PHP_INT_MAX + '1s'));
var_dump(1/2);
var_dump((int)((0.1 + 0.7) * 10));
var_dump((int)('d2fgdf1'));
var_dump('0123' + 1);
echo (7E-10 * 10).BR;
echo (1.2e3).BR;
var_dump(NAN == NAN);
echo 's\'\'\\'.BR;
echo 'Также вы можете вставлять в строки
символ новой строки вот так,
это нормально'.BR;
echo "string \n\r string".BR;
$bar = <<<EOT
dfgdfg
EOT;
var_dump($bar);

$juice = "apple";
echo "string $juice juice".PHP_EOL;
echo "string {$juice}s juice".PHP_EOL;
