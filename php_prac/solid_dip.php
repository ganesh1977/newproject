<?php

interface databaseConnection
{
    public function connect();
}

class mysqlConnection implements databaseConnection
{
    public function connect()
    {
        echo " MySql has been connected properly ";
    }
}

class postgreConnection implements databaseConnection
{
    public function connect()
    {
        echo "Post Sql connected properly";
    }
}

class userRepository
{
    public $db;
    public function __construct(databaseConnection $db)
    {
        $this->db = $db;
    }

    public function getUsers()
    {
        return $this->db->connect();
    }
}

$mysql = new mysqlConnection();

$rep1 = new userRepository($mysql);
print_r($rep1->getUsers());
