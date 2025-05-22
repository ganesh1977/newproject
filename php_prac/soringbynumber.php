<?php
    $ar = [5,2,3,10,4,7,8];
    $arr = [];

    echo "count::".count($ar);
    for ($i=0;$i<count($ar);$i++)
    {
        for($j=0;$j<count($ar)-1;$j++)
        {
            if ($ar[$j]>$ar[$j+1])
            {
                $arr[] = $ar[$i];
            }
            if ($ar[$j] > $ar[$j + 1]) {                
                $temp = $ar[$j];
                $ar[$j] = $ar[$j + 1];
                $ar[$j + 1] = $temp;
            }
        }
    }

    print_r(array_unique($ar));

    print_r(array_unique($arr));