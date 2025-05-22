<?php

class Logger
{
    public function log($msg)
    {
        echo $msg;
    }
}

echo $util->setLogger(new Logger());


$util->setLogger(new class () {
    public function log($msg)
    {
        echo $msg;
    }
});
