<?php

class rectangle
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->length * $this->width;
    }

    public function getParameter()
    {
        return 2 * ($this->length + $this->width);
    }
}

$rectagle = new rectangle(10, 20);

echo "AREA - ".$rectagle->getArea()."<br>";
echo "PARAMETER - ".$rectagle->getParameter()."<br>";

echo pi() ."<br>";
