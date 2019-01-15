<?php 
require 'vendor/autoload.php';
require 'core/functions.php';
$query = require 'core/bootstrap.php';
Router::load('routes.php')->direct(Request::uri(), Request::method());