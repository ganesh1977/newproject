<?php
class logger
{
    public function log($message)
    {
        echo "Log:  $message".PHP_EOL;
    }
}

//$logg = new logger();

$obj = new class(new logger())
{
    private $logg;
    public function __construct($logg)
    {
        $this->logg = $logg;
    }
    public function dosomething()
    {
        $this->logg->log('Poara be');
    }
};

$obj->dosomething();