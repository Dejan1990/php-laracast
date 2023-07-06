<?php 

class Database {
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=database;port=3306;dbname=laracast_demo_db;user=root;password=tiger;charset=utf8mb4";
        $this->connection = new PDO($dsn);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}