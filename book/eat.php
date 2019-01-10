<?php 
if(isset($_POST['lunch'])){
    foreach($_POST['lunch'] as $choise){
        print $choise ."<br>";
    }
}
