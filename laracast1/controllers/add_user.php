<?php 
App::get('database')->insert('users', [
    'username' => $_POST['username']
]);
header("Location: /");