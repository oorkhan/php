<?php 

function fetchAllTasks($dbh){
$query = "select * from todos";
$stmt = $dbh->prepare($query);
$stmt->execute();
return $stmt->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function connectToDb (){
    $dsn = 'mysql:host=localhost;dbname=mytodo';
    $username = 'root';
    $password = '';
    try{
        return new PDO($dsn, $username, $password);  
    }
    catch(PDOException $e)
    {
        echo "Could not connect";
        die ($e->getMessage());
    }
}

function dd($data){
    echo "<pre>";
        die(var_dump($data));
    echo "<pre>";
}
