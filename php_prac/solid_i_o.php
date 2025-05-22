<?php

interface Solidio
{
    public function area();
}

class Circle implements Solidio
{
    public $radis;
    public function __construct($radis)
    {
        $this->radis = $radis;
    }

    public function area()
    {
        return pi() * pow($this->radis, 2);
    }
}

class AreaCalculator
{
    public function calculator(Solidio $shape)
    {
        return $shape->area();
    }
}
$circle = new Circle(50);
$areac = new AreaCalculator();
echo $areac->calculator($circle);
//echo $circle->radis;
