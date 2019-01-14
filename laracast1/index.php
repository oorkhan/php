<?php 
require 'vendor/autoload.php';
require 'core/functions.php';
$query = require 'core/bootstrap.php';
$router = Router::load('routes.php');
require $router->direct(Request::uri(), Request::method());