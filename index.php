<?php

require "functions.php";
require 'Database.php';

$config = require "config.php";

$db = new Database($config['database']);

$id = $_GET['id'] ?? '';

if ($id) {
    $query = "SELECT * FROM posts WHERE id = :id";

    $posts = $db->query($query, [':id' => $id])->fetch(); // : before id is optional
} else {
    $query = "SELECT * FROM posts";

    $posts = $db->query($query)->fetchAll(); // : before id is optional
}

dd($posts);



