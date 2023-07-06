<?php

require "functions.php";
require 'Database.php';

$config = [
    'host' => 'database',
    'port' => 3306,
    'dbname' => 'laracast_demo_db',
    'charset' => 'utf8mb4'
];

$db = new Database($config);

$posts = $db->query("SELECT * FROM posts")->fetchAll();

dd($posts);



