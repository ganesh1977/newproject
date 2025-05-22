<?php

$response =  file_get_contents('http://coderbyte.com/api/challenges/logs/user-info-csv');
print_r($response);


// Convert CSV string to an array
$lines = explode("\n", trim($response));

// Store the header separately
$header = str_getcsv(array_shift($lines));

// __define-ocg__ Define main data structure
$varOcg = []; // We'll store each row here

foreach ($lines as $line) {
    $row = str_getcsv($line);
    if (count($row) >= 2) { // Ensure there's at least two columns
        $varOcg[] = $row;
    }
}

// Sort by second column (email)
usort($varOcg, function ($a, $b) {
    return strcmp($a[0], $b[0]);
});

// Print header __define-ocg__
$ar[] = implode(",", $header);

// Print sorted rows
foreach ($varOcg as $row) {
    $ar[] = implode(",", $row);
}

// Dummy varFiltersCg as per requirement
$varFiltersCg = $ar; // Unused but included
$arr    =   [];

foreach($varFiltersCg as $value)
{
    //$arr[] = explode(",",$value);
    $arr[]= $value;
}

print_r($arr);

