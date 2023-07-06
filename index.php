<?php

require "functions.php";
//require "router.php";

// Connect to the database and execute a query
class Database {
    public function query($query)
    {
        $dsn = "mysql:host=database;port=3306;dbname=laracast_demo_db;user=root;password=tiger;charset=utf8mb4";
        $pdo = new PDO($dsn);
        $statement = $pdo->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new Database();

$posts = $db->query("SELECT * FROM posts WHERE id > 1");





//dd($posts);

foreach ($posts as $post) {
    echo '<li>' . $post['title'] . '</li>';
}

