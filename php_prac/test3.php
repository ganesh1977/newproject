<?php

function isBalanced($paranthesis)
{
    $stack = [];

    $opening = ['(' => true,'[' => true,'{' => true];
    $closing = [')' => true,']' => true,'}' => true];
    $paris = [
            ')' => '(',
            '}' => '{',
            ']' => '['
    ];
    //echo strlen($paranthesis); exit;
    for ($i = 0; $i < strlen($paranthesis);$i++) {
        $c = $paranthesis[$i];

        if (isset($opening[$c])) {
            array_push($stack, $c);
        } elseif (isset($closing[$c])) {
            if (count($stack) == 0 || array_pop($stack) != $paris[$c]) {
                return false;
            }
        }
    }
    return count($stack) == 0;
}

$s = '(3+5)*(4-2)';
$d = isBalanced($s);
echo $d;
