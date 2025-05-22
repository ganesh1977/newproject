<?php

abstract class rama
{
}

class data extends rama
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

$data = new data("amama");
