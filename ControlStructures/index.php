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
  # code...
}
