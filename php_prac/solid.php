<?php

class Solid
{
    public function generateReport()
    {
        return "Report Data..";
    }
}

class FileSaver
{
    public function saveFileMenu($filname, $data)
    {
        file_put_contents($filname, $data);
    }
}

$solid = new Solid();
$filesaver = new FileSaver();

$filesaver->saveFileMenu('text.txt', $solid->generateReport());
