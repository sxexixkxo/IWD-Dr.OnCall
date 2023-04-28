<?php
//login
@include 'db_connection.php';

session_start();

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $password = md5($_POST['password']);

   $select = "SELECT * FROM users WHERE username = '$username' && password = '$password'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
     if($username == 'Admin'){
       header('location:adminPage.php');

     }else{
      $_SESSION['username'] = $username;
      header('location:main.php');
    }
   }else{
     echo '<script> alert("Incorrect username or password.")</script>';
    //$error[] = 'Incorrect username or password.';
   }

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel= "stylesheet" href= "css/mlrstyles.css?v=<?php echo time();?>"> <!--force css to reload-->
  </head>

  <body>
    <div class="container">
      <div class="title">Welcome</div>
        <div class="contents">
          <form action="" method= "post">
            <div class="users-details">
              <div class="input-boxx">
                <span class="details">Username</span>
                <input type="text" placeholder="Username" name= "username">
              </div>

              <div class="input-boxx">
                <span class="details">Password</span>
                <input type="password" placeholder="Password" name= "password">
              </div>
              </div>
              <div class="button">
                <input type="submit" value="Login" name= "submit">
              </div>
              <div class="login-now">Don't have an account? <a href="register.php">Register now</a></div>
            </form>
          </div>
      </div>
  </body>
</html>
