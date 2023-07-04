<?php

require "functions.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/php-server/') {
    require 'controllers/index.php';
} else if ($uri === '/php-server/about') {
    require 'controllers/about.php';
} else if ($uri === '/php-server/contact') {
    require 'controllers/contact.php';
}