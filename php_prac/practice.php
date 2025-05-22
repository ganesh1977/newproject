<?php

$place = array("NYC","LA","Paris");
array_pop($place);
$palce1 = array("Paris");
$place = array_merge($place, $palce1);
print_r($place);

$a1 = array_fill(1, 4, 'Hellow');
$a2 = array_fill(5, 1, 'php');

$a3 = array_merge($a1, $a2);
print_r($a3);

print_r($a2);

$email = "ganesh@gmail.com";
$dt = substr($email, strpos($email, "@") + 1);
print_r($dt);

$x = array(1,3,2,3,7,8,9,7,3);
$y = array_count_values($x);
echo $y[8];

$x = array("aaa","ttt","www","ttt","yyy","tttt");
$y = array_count_values($x);
echo $y['ttt'];
