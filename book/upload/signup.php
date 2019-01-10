<?php 
include_once "dbh.php";
$first = $_POST['first'];
$last = $_POST['last'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (first, last, username, password) VALUES ('$first', '$last', '$username', '$password')";
$result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $userid = $row['id'];
        $sql = "INSERT INTO profileimg (userid, status) VALUES ('$userid', 1)";
        $result = mysqli_query($conn, $sql);
        header("location: form_upload_profile_img.php");
    }
}else {
    echo "you have error";
}