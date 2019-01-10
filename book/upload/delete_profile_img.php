<?php
session_start();
include_once "dbh.php";
$sessionid = $_SESSION['id'];

//determine filename and extension
$filename = "uploaded_files/profile".$id."*";
$fileinfo = glob($filename);
$fileext = explode(".", $fileinfo[0]);
$fileactualext =  $fileext[1];
$file = "uploaded_files/profile".$sessionid.".".$fileactualext;

if(!unlink($file)){
    echo "file was not deleted";
}else {
    echo "file was deleted";
}

$sql = "UPDATE profileimg SET status=1 WHERE userid='$sessionid';";
mysqli_query($conn, $sql);
header('Location: form_upload_profile_img.php');