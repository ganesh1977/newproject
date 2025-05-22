<?php

function calculateFinalSpeed(float $initialSpeed, array $inclinations): float
{
    $speed = $initialSpeed;
    //echo "SPEED:".$speed;
    $r = array_unique($inclinations, SORT_REGULAR);
    for ($i = 0;$i <= count($r);$i++) {
        echo " -- ".$speed. " -- $i-- ";
        //echo $inclinations[$i];
        //echo abs($inclinations[$i]);
        if ($i < 0) {
            $speed = $speed + abs($inclinations[$i]);
            //echo $speed;
        } elseif ($i > 0) {
            $speed = $speed - abs($inclinations[$i]);
            //echo $speed;
        }
        echo $speed;
    }
    return $speed;
}

calculateFinalSpeed(60, [0, 30, 0, -45, 0]); // Example call
