<?php

$arr = array(1,2,3,4);

print_r($arr);

$target = 6;
$s = 0;
for ($i = 0;$i < count($arr);$i++) {
    $s = $s + $arr[$i];
    if ($s == $target) {
        print_r("Sum of the values is $s");
    }
    //print_r($arr[$i]);
}

echo "\n";
$sum = 0;
for ($i = 0;$i < count($arr);$i++) {
    for ($j = 0;$j < count($arr);$j++) {
        $sum = $arr[$i] + $arr[$j];
        if ($sum == $target) {
            print_r("Sum of the values is $sum is $i and $j \n");
        }

    }
}
