<?php 
require 'functions.php';
require 'Task.php';
$dbh = connectToDb();

$tasks = fetchAllTasks($dbh);




require 'index.view.php';