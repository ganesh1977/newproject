<?php
    $num = 5;
    echo match($num)
    {
        1 => "one",
        2 => "two",
        3 => "three",
        default => printData('4')
    };

    function printData(int|string $data)
    {   
        echo $data;
    }   

