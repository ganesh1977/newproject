<?php

class outer
{
    private $prop = 1 ;
    protected $prop2 = 2;

    protected function fun1()
    {
        return 3;
    }

    public function fun2()
    {
        return new class ($this->prop) extends outer {
            public function __construct($prop)
            {
                $this->prop3 = $prop;
                echo " VALUE: ".$this->prop3.":";
            }
            public function fun3()
            {
                return ($this->prop2 * $this->prop3) * $this->fun1();
            }
        };
    }

}

echo (new outer())->fun2()->fun3();
