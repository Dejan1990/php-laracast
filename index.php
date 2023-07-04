<?php

$heading = 'Home';

echo $_SERVER['REQUEST_URI'];

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

dd($_SERVER);

require 'views/index.view.php';