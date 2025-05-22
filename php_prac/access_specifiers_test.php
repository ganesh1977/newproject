<?php

class GeeksForGeeks
{
    public $x = 1000;
    public $y = 100;
    private $z = 2000;

    private $m = 0;

    protected $aa = 5000;
    public function div()
    {
        echo $this->m = $this->x + $this->y;
        echo " - ";
    }
}
class Geeks extends GeeksForGeeks
{
    public function mul()
    {
        echo $this->aa;

    }
}
$d = new GeeksForGeeks(0);
$d->div();
$d->x;
$d->y;
$d->m;

$g = new Geeks();
$g->mul();
