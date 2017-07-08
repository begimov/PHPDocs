<?php

$arr = [1,2,3,4,5];
foreach ($arr as $key => $value) {
    echo $value;
    if ($key === 3) break;
}
echo '</br></br>';

$i = 0;
while (++$i) {
    echo $i.'<br>';
    switch ($i) {
      case 3:
        echo "Iter $i<br>";
        break;
      case 10:
        echo "Iter $i<br>";
        break 2;
      default:
        echo 'DEFAULT';
        break;
    }
}

reset($arr);
while (list($k, $v) = each($arr)) {
    if ($v % 2 === 0) continue;
    echo "$v ";
}

foreach ($arr as $key => $value) {
    if (!($value % 2)) continue;
    echo "$value ";
}
echo '</br></br>';

$i = 0;
while (++$i < 5) {
    echo 1;
    while (1) {
        echo 2;
        while (1) {
            echo 3,'</br>';
            continue 3;
        }
        echo 'NO';
    }
    echo 'NO';
}
