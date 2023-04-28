<?php
//registration
@include 'db_connection.php';

session_start();

if(isset($_POST['submit'])){

   $fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
   $password = md5($_POST['password']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $cPassword = md5($_POST['cPassword']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);

   $select = " SELECT * FROM users WHERE fullName= '$fullName' && password = '$password' && username = '$username' && email = '$email'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
     echo '<script> alert("User already exist.")</script>';
      //$error[] = 'User already exist';
   }else{
      if($pass != $cpass){
        echo '<script> alert("Passwords do not match.")</script>';
        //$error[] = 'Passwords do not mathched!';
      }else{
         $insert = "INSERT INTO users(fullName, password, username, email,Suser) VALUES('$fullName', '$password', '$username','$email','0')";
         mysqli_query($conn, $insert);
         header('location:loginAcc.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel= "stylesheet" href= "css/mlrstyles.css?v=<?php echo time();?>"> <!--force css to reload-->
  </head>
<!-- index.php contains registration -->
  <body>
    <?php

     ?>
    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
          <form action="" method= "post">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" name= "fullName" placeholder="Enter your name" required>
              </div>

              <div class="input-box">
                <span class="details">Password</span>
                <input type="password" name= "password" placeholder="Enter your password" required>
              </div>

              <div class="input-box">
                <span class="details">Username</span>
                <input type="text" name= "username" placeholder="Enter your username" required>
              </div>

              <div class="input-box">
                <span class="details">Confirm Password</span>
                <input type="password" name= "cPassword" placeholder="Confirm your password" required>
              </div>

              <div class="input-box">
                <span class="details">Email</span>
                <input type="email" name= "email" placeholder="Enter your email" required>
              </div>
            </div>
              <div class="button">
                <input type="submit" value="Register" name= "submit">
              </div>
              <div class="login-now">Already have an account? <a href="loginAcc.php">Login now</a></div>
            </form>
          </div>
        </div>
  </body>
</html>
