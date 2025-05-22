<?php

$x = 1;
$y = 2;

if (++$x == $y++) {
    echo "DATA ::: $y, $x";
}

$input = "Swapna<td>aaaa</td>you are really<i>adadadad</i>";

$input = strip_tags($input);
print($input);

echo "\n";
$str  = "Hellow! My Name is Camaron Fox, Coffee";
$find = array('/is/','/Coffee/');
$replace = array("/was/",'/Tea/');
echo "\n";
echo preg_replace($find, $replace, $str);


$x = array(1,3,2,3,7,8,9,7,3);
$y = array_count_values($x);
echo "\n";
echo "AAAA:".$y[8];
print_r($y);
