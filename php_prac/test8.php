<?php

$sum = 1234;

var_dump(is_countable($sum));

$ar = array(1,1,2,3);
var_dump(is_countable($ar));

$itr = new ArrayIterator();
var_dump(is_countable($itr));

// Create an object of class
// Declare an empty class
class GFG
{
    // Empty class
}

$obj = new GFG();
var_dump(is_countable($obj));

// PHP program to illustrate
// hash_equals function
$known_str = crypt('GFG', 'Hello-GFG');
$usr_str   = crypt('GFG', 'Hello-GFG');

// Compare both strings
$res = hash_equals($known_str, $usr_str);

// Display result
var_dump($res);

$algo = 'argon2i';
if (in_array($algo, password_algos())) {
    echo "The $algo algorithm is supported.\n";
} else {
    echo "The $algo algorithm is not supported.\n";
}

echo date("Y-m-d", strtotime("12th february 2019"))."\n";

echo date("Y-m-d", strtotime("now"))."\n";
