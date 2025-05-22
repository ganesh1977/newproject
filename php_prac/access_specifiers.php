<?php
class GeeksForGeeks
{
    public $x = 1000 ; # protected attributes
    public $y = 100 ;
    public function div()
    {
        echo $d = $this->x / $this->y ;
        echo " ";
    }
}
class child extends GeeksForGeeks
{
    protected function sub()
    {
        echo $s = $this->x - $this->y;
    }
}
class derived extends child # Outside Class
{
    public function mul()
    {
        echo $m = $this->x * $this->y;
    }
}

class subdevierd extends GeeksForGeeks
{
    public function divs()
    {
        echo $mm = $this->x/$this->y;
    }
}
$obj = new GeeksForGeeks();

// It will return the division result
$obj->div();

// Since it's a derived class of the main class,
$obj->sub();

// Since it's an outside class, therefore it
// will produce a fatal error .
$obj->mul();

$obj->divs();

