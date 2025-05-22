<?php

    $ar = [1,2,3,4,5,6,8,11];
    $ar1 = [2,3,4,5,6,7,9,10];

    $ardiff = array_diff($ar,$ar1);
    print_r($ardiff);

    function myfunction($a,$b)
    {
        if ($a===$b)
        {
            return 0;
        }
        return ($a>$b)?1:-1;
    }

    $result=array_udiff($ar,$ar1,"myfunction");
    print_r($result);

    $c = [];
    for($i=0;$i<count($ar);$i++)
    {
        if(in_array($ar[$i],$ar1))
        {
            $c[] = $ar[$i];
        }
    }

    print_r($c);

    $ars = array_merge($ar,$ar1);
    print_r(array_unique($ars));
    echo "AAAAAA\n";

    $ad = array_unique($ars);
    print_r($ad);
    //print_r(ksort($ad));