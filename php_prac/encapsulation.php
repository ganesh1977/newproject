<?php

class Encaps
{
    private $useruid;
    private $pwd;

    public function __construct($useruid, $pwd)
    {
        $this->useruid = $useruid;
        $this->pwd = $pwd;
        echo " - ".$this->useruid." - ".$this->pwd;
    }

    public function updatePwd($useruid, $pwd)
    {
        echo "UserId::::: ".$useruid. '====  '.$pwd;
    }

    public function getUserInfo($useruid)
    {
        echo " -- ".$useruid;
    }
}

$useruid = "abcd";
$pwd = "ganesh";

$obj = new Encaps($useruid, $pwd);
echo $obj->updatePwd($useruid, $pwd);
echo $obj->getUserInfo($useruid);
//echo $obj->pwd = $pwd;
