<?php
class A {
    public $ref;
}

$a = new A();
$b = new A();
$c = new A();

$a->ref = $b;
$b->ref = $a;
$c->ref = $c;

unset($a);
unset($b);
unset($c);

// At this point, $a and $b are unreachable but not collected by ref counting
echo gc_collect_cycles();  // Returns number of collected cycles
echo "\n";
