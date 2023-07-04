<?php

require "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//dd($uri);

if ($uri === '/php-server/') {
    require 'controllers/index.php';
} else if ($uri === '/php-server/about') {
    require 'controllers/about.php';
} else if ($uri === '/php-server/contact') {
    require 'controllers/contact.php';
}