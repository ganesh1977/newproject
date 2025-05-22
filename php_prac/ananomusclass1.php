<?php
class myclass{
    public function hello()
    {
        echo "Hello world!".PHP_EOL;
    }
}

$obj = new class("neena") extends myclass{
    private string $m;
    public function __construct($x)
    {
        $this->m = $x;
    }
    public function greeting()
    {
        parent::hello();
        echo "Welcome ".$this->m.PHP_EOL;
    }
};

$obj->greeting();