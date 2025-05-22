<?php
    $obj = new class(10)
    {
        private $y;
        public function __construct($y)
        {
            $this->y= $y;
        }
        public function addition($y)
        {
            return $this->y+$y;
        }
        public function divigion($y)
        {
            return $this->y/$y;
        }
    };

echo "ADDITOON:::".$obj->addition(20);
echo "DIVITISOPN::".$obj->divigion(120);


