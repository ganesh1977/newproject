<?php
$obj  = new class()
{
    function greeting()
    {
        echo "GREETING KING.".PHP_EOL;
    }
};
$obj->greeting();

echo "Name of the class".get_class($obj);