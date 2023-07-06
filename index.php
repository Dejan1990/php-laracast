<?php

require "functions.php";
//require "router.php";

// connect to our MySQL database
$dsn = "mysql:host=database;port=3306;dbname=laracast_demo_db;user=root;password=tiger;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

//dd($posts);

foreach ($posts as $post) {
    echo '<li>' . $post['title'] . '</li>';
}

