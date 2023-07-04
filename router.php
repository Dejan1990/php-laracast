<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/php-server/' => 'controllers/index.php',
    '/php-server/about' => 'controllers/about.php',
    '/php-server/contact' => 'controllers/contact.php'
];

function routeToControll($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);
    require "views/$code.php";
    die();
}

routeToControll($uri, $routes);