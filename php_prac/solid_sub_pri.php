<?php

abstract class bird
{
    abstract public function move();
}
class FlyBird extends bird
{
    public function move()
    {
        return " i am afraid ";
    }
}

class bengion extends bird
{
    public function move()
    {
        return " i am pegion ";
    }
}

$birds = [new FlyBird(),new bengion()];
print_r($birds);
