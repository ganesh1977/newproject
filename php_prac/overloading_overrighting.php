<?php
    class shape
    {
        function __call($name_of_function,$argments)
        {
            if($name_of_function=='area')
            {
                switch(count($argments))
                {
                    case 1: 
                        return 3.14*$argments[0];
                    case 2:
                        return $argments['0']*$argments['1'];
                    default:
                        return $argments['0']+$argments['1']+$argments['2'];

                }
            }
        }
    }

    $s = new shape();

    echo $s->area(100);

    echo "\n";

    echo $s->area(4,12);

    echo "\n";

    echo $s->area(4,12,12);