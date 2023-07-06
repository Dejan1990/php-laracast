<?php 

class Database {
    public $connection;

    public function __construct()
    {
        $config = [
            'host' => 'database',
            'port' => 3306,
            'dbname' => 'laracast_demo_db',
            'charset' => 'utf8mb4'
        ];

        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        $this->connection = new PDO($dsn, 'root', 'tiger', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}