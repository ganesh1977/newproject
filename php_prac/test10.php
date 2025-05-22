<?php

function abcd(array &$arr)
{
    foreach ($arr as $key => $value) {
        if (gettype($value) == 'string') {
            unset($arr[$key]);
        }
    }
    //print_r($arr);
}

$ar = [1,'a','b',2];

abcd($ar);
print_r($ar);
