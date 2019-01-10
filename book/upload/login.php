<?php
session_start();
 if(isset($_POST['submitlogin'])){
     $_SESSION['id'] = 1;
     header('Location: form_upload_profile_img.php');
 }