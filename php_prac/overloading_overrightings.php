<?php
class p
{
    function greeks()
    {
        echo "Parent\n";
    }
}

class c extends p
{
    function greeks()
    {
        echo "\n Child";
    }
}

$p = new p;
var_dump($p);
$p->greeks();

$c = new c;
var_dump($c);
$c->greeks();