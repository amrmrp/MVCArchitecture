<?php

namespace model;


use Helper\ConfigDatabase;

;

class Database
{
    protected $connection;

    public function __construct()
    {

        $o = new ConfigDatabase();
        $host = $o->getconf("database.mysql.host");
        $dbname = $o->getconf("database.mysql.dbname");
        $username = $o->getconf("database.mysql.username");
        $password = $o->getconf("database.mysql.password");

        try {
            $this->connection = new \PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }

}