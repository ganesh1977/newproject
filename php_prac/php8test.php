<?php
function setstatus(int|string $string)
{
    echo $string;
}


echo setstatus('ga111nesh');


echo "\n";
class test
{
    public function __construct(private string $name, private int $num)
    {
        echo $name. " -- ".$num;
    }    
}

$test = new test('r222amam','11');


$code = 404;

$status = match($code) {
    200 => 'OK',
    404 => 'Not Found',
    default => 'Unknown'
};

echo $status;

