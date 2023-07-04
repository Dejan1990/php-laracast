<?php

require "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//dd($uri);

/*
if ($uri === '/php-server/') {
    require 'controllers/index.php';
} else if ($uri === '/php-server/about') {
    require 'controllers/about.php';
} else if ($uri === '/php-server/contact') {
    require 'controllers/contact.php';
}*/

$routes = [
    '/php-server/' => 'controllers/index.php',
    '/php-server/about' => 'controllers/about.php',
    '/php-server/contact' => 'controllers/contact.php'
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);
    echo "Sorry. Not Found.";
    die();
}

