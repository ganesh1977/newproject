<?php

$ar = array("1","2","3","4","5");
$arr = array("a","b","c","d","w");

print_r(array_combine($ar, $arr));

print_r(array_product($ar));

print_r(array_flip($ar));

print_r(array_filter($ar, "even"));

function even($val)
{
    return !($val & 1);
}
