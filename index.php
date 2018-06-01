<?php


$query = require 'core/bootstrap.php';

$router = new Router;

//require 'routes.php';
$router = Router::load('routes.php');
require $router->direct(Request::uri());
//require $router->direct($uri);
