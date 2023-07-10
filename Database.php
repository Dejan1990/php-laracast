<?php 

class Database {
    public $connection;
    public $statement; // we've effectively assigned the PDO statement to the object

    public function __construct($config, $username = 'root', $password = 'tiger')
    {
        $dsn = 'mysql:'.http_build_query($config, '', ';');

        //$dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        //return $statement;
        return $this; // return $this -> return object itself, an instance  => Database
    }

    public function all()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }
}