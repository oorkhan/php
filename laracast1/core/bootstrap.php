<?php 

App::bind('config', require 'config.php');


App::bind('database', new QueryBuilder(Connection::connect(App::get('config')['database'])));