<?php
const input = '[{"user":"UserA", "city": "Bangalore"}]';

function mapping($input) {
    $data = json_decode($input,true);
    foreach($data as $key=>$value)
    {
        //print_r($value);
        return $value;
    }
}

$data = mapping(input);

echo $data['user']."--".$data['city'];