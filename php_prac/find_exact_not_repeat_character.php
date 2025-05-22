<?php

class Find_exact_not_repeat_character
{
    public $str;
    public function __construct($str)
    {
        $this->str = $str;
    }

    public function find_character()
    {
        $lengthOfString = strlen($this->str);
        $string = $this->findFirstCharacter($lengthOfString);
        return $string;
    }

    public function findFirstCharacter($cnt)
    {
        $countChar = [];
        $duplicateChar = [];
        $ar = [];
        /*for($i=0;$i<$cnt;$i++)
        {
            $char = $this->str[$i];
            if (!isset($countChar[$char]))
            {
                $countChar[$char] = $char;
            }
            else
            {
                $duplicateChar[$char] = $char;
            }
        }*/

        foreach (str_split($this->str) as $char) {
            isset($countChar[$char])
                ? $duplicateChar[$char] = $char
                : $countChar[$char] = $char;
        }


        $simArray = array_diff($countChar, $duplicateChar);
        foreach ($simArray as $key => $value) {
            return $value;
        }
    }
}

$str = new Find_exact_not_repeat_character('ganesh');

echo $str->find_character();
