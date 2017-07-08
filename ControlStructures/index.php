<?php

define (BR, '</br>');

if (0)
echo 1, BR;
echo 3, BR;

$a = 1;

while ($a) {
    echo $a, BR;
    $a -= 1;
}

$i = 0;
do {
    echo $i, BR;
    $i++;
} while ($i < 2);

for ($i=0; $i < 1; $i++) {
  echo "string" . $i . BR;
}

for ($i=1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}
echo BR;

$i = 1;
for (; ; ) {
    if ($i > 10) break;
    echo $i;
    $i++;
}
echo BR;

for ($i=1, $j=0; $i <= 10; $j += $i, print $i, $i++);

$people = [
  ['name' => 'Andrew', 'salt' => 1],
  ['name' => 'Sasha', 'salt' => 2]
];

for ($i=0, $size = count($people); $i < $size; ++$i) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
}
echo '<pre>';
var_dump($people);
