<?php

class revese
{
    public $next;
    public $val;

    public function __construct($next = null, $val = 0)
    {
        $this->next = $next;
        $this->val = $val;
    }

    public function ReveserLinked($head)
    {
        echo "AAAAA";
        $prev = null;
        $current = $head;

        while ($current !== null) {
            $next = $this->next;
            $this->next = $prev;
            $prev = $current;
            $current = $next;
        }
        return $prev;
    }
}

$rev = new revese(20, 30);
echo $rev->ReveserLinked(10);
