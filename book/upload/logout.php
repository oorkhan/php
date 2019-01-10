<?php
if(isset($_POST['submitlogout'])){
    session_start();
    session_unset();
    session_destroy();
    header("Location: form_upload_profile_img.php");
}