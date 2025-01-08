<?php
<<<<<<< HEAD
require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';

use Framework\Router;





$router = new Router();

require basePath('routes.php'); //registering routes

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];


$router->route($uri, $method); //running the route method inside the Router Class
=======
require '../helpers.php';
loadView('home');
>>>>>>> 48863831af1e001615470ae6c5723e2194c3f35b
