<?php 

App::bind('config', require 'config.php');


App::bind('database', new QueryBuilder(Connection::connect(App::get('config')['database'])));

function view($name, $data=[]){
    extract($data);
    require "views/{$name}.view.php";
}

function redirect($path){
    header("Location: {$path}");
}