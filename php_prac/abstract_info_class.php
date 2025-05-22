<?php

abstract class parentClass
{
    public $name = "ganesh";
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract protected function prefixName($name);
}

class childClass extends ParentClass
{
    public function __construct()
    {
        echo "sunil:::".$this->name;
    }

    public function prefixName($name)
    {
        echo "aaaa:::".$name;
    }
}

$chi = new ChildClass();
$chi->prefixName('mallesh');
print_r($chi);
