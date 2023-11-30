<?php

use App\Config\Router;

require './../vendor/autoload.php';

$router = new Router();

echo $router->resolve($_SERVER['REQUEST_URI']);