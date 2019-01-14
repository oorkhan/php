<?php 

$router->get('' , 'controllers/index.php');
$router->get('about' , 'controllers/about.php');
$router->get('contact' , 'controllers/contact.php');
$router->post('names', 'controllers/add_names.php');
$router->post('tasks', 'controllers/add_task.php');
$router->post('names', 'controllers/add_user.php');