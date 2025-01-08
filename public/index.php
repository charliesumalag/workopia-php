<?php
require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';

use Framework\Router;





$router = new Router();

require basePath('routes.php'); //registering routes

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];


$router->route($uri, $method); //running the route method inside the Router Class
