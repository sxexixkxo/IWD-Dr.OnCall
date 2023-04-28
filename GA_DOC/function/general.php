<?php
  function add_Doctor($name,$specialty,$location,$picture,$email){
    include 'function/db_conn.php';

    if(empty($name)){
      header("Location:index.php?error=Name is required");
      exit();
    }elseif(empty($specialty)){
      header("Location:index.php?error=Specialty is required");
      exit();
    }elseif(empty($location)){
      header("Location:index.php?error=location is required");
      exit();
    }elseif(empty($picture)){
      header("Location:index.php?error=picture is required");
      exit();
    }elseif(empty($email)){
      header("Location:index.php?error=email is required");
      exit();
    }else{
      $sql = "INSERT INTO `doctors` (`name`, `specialisation`, `location`,`picture`,`email`) VALUES ('$name', '$specialty', '$location','$picture','$email')";
      $result = mysqli_query($conn,$sql);
      if($result){
          echo "<script>alert('Doctor Info Added Successfully');
          window.location.href='http://localhost/IWD-%20GA/GA_DOC/adminPage.php'</script>";
          exit();
      }else{
        echo "<script>alert('Doctor Info Not Added Successfully');
        window.location.href='http://localhost/IWD-%20GA/GA_DOC/adminPage.php'</script>";
        exit();
      }
    }
}
?>



<?php
  function Login($username,$password){
    include "function/db_conn.php";

    if(isset($_POST['UserName'])&& isset($_POST['Password'])){
      function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      $uname = validate($_POST['UserName']);
      $pass = validate($_POST['Password']);

      if(empty($uname)){
        header("Location:index.php?error=User Name is required");
        exit();
      }elseif(empty($pass)) {
        header("Location:index.php?error=Password is required");
        exit();
      }else{
        $sql = "SELECT * FROM users WHERE Username = '$uname' AND Password = '$pass' ";
        $result = mysqli_query($conn,$sql);
        #if infomation is match correctly, the 1 means true
        if(mysqli_num_rows($result) >0){
          $row = mysqli_fetch_assoc($result);
            if ($row['Username']=== Username && $row['Password']===$pass) {
              echo "Logged in!";
              $_SESSION['user_name'] = $row['Username'];
              $_SESSION['name'] = $row['Name'];

              echo "Hi Welcome";
              exit();

            }else{
              header("Location: index.php?error= User Name or Password is invalid");
              exit();
            }

        }else{
          echo "invalid Username or Password";

        }
      }
    }
  }

 ?>

 <?php
 function change($name, $selection,$update){
   include "function/db_conn.php";

   if ($selection == "Name"){
    $sql = "UPDATE `doctors` SET `name`= '$update' WHERE name = '$name'";
   }elseif ($selection == "Specialty") {
     $sql = "UPDATE `doctors` SET `specialisation`='$update' WHERE name = '$name'";
   }elseif ($selection == "Location") {
     $sql = "UPDATE `doctors` SET `location`='$update' WHERE name = '$name'";
   }elseif ($selection == "email") {
     $sql = "UPDATE `doctors` SET `email`='$update' WHERE name = '$name'";
   }else{
    echo "<script>alert('Something went wrong');
    window.location.href='http://localhost/IWD-%20GA/GA_DOC/adminPage.php'</script>";
   }
   $result = mysqli_query($conn,$sql);
   echo "<script>alert('Doctor Info Changed Successfully');
   window.location.href='http://localhost/IWD-%20GA/GA_DOC/adminPage.php'</script>";
   exit();
 }

  ?>

  <?php

  function delete($name){
    include "function/db_conn.php";

    $sql = "DELETE FROM `doctors` WHERE `name` = '$name' ";
    $result = mysqli_query($conn,$sql);
    echo "<script>alert('The Selected Doctor had been removed');
    window.location.href='http://localhost/IWD-%20GA/GA_DOC/adminPage.php'</script>";

}
?>
