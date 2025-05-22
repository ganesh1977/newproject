<?php

final class abc
{
    public function test()
    {
        echo "baseclass:\n";
    }

    final public function test2()
    {
        echo "ramama";
    }
}

class abcd extends abc
{
    public function test()
    {
        echo "AAAAAAA";
    }
}

$abcd = new abc();
echo $abcd->test();
echo $abcd->test2();
$abcdef = new abcd();
echo $abcdef->test2();
