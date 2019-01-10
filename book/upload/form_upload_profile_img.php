<?php
  session_start();
  include_once 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>upload</title>
</head>
<body>
<?php
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);
  

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $sqlimg = "SELECT * FROM profileimg WHERE userid='$id'";
      $resultimg = mysqli_query($conn, $sqlimg);
      while($rowimg = mysqli_fetch_assoc($resultimg)){
        echo "<div>";
        if($rowimg['status']==0){
          //determine filename and extension
          $filename = "uploaded_files/profile".$id."*";
          $fileinfo = glob($filename);
          $fileext = explode(".", $fileinfo[0]);
          $fileactualext =  $fileext[1];
          $file = "uploaded_files/profile".$id.".".$fileactualext;
          echo "<img width='150px' src='$file'>";
          echo $row['username'];
        }else {
          echo '<img src="uploaded_files/defaultprofile.jpg">';
          echo $row['username'];
        }
        echo "</div>";
      }
      
    }
  }else{
    echo "There are no users inside database";
  }
 
  if(isset($_SESSION['id'])){
    if($_SESSION['id']==1 ){
      echo "you are loged in as user no:1";
    }
    echo '
      <h4>Upload profile image</h4>
      <form method="POST" action="upload_profile_img.php" enctype="multipart/form-data">
      <input type="file" name="file">
      <button type="submit" name="submit">upload</button>
      </form>

      <form method="POST" action="delete_profile_img.php">
      <button type="submit" name="submitdelete">Delete</button>
      </form>  
      <p>Logout as user</p>
      <form action="logout.php" method="POST">
      <button type="submit" name="submitlogout">Logout</button>
      </form>';
  }else {
    echo "tou are not logged in";
    echo '<p>Login as user</p>
        <form action="login.php" method="POST">
          <button type="submit" name="submitlogin">Login</button>
        </form> or sign up
        <form action="signup.php" method="POST">
          <input type="text" name="first" placeholder="first name">
          <input type="text" name="last" placeholder="last name">
          <input type="text" name="username" placeholder="username">
          <input type="password" name="pwd" placeholder="password">
          <button type="submit" name="submitSignup">Signup</button>
        </form>';
  }

?>
</body>
</html>