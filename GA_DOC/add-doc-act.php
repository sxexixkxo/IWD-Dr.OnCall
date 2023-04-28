<?php
session_start();
include "db_connection.php";
if(isset($_POST['upload'])){
  $NAME = $_POST['name'];
  $SPEC = $_POST['specialty'];
  $LOCA = $_POST['location'];
  $MAIL = $_POST['email'];
  $FILE = addslashes(file_get_contents($_FILES['picture']['tmp_name']));
  $sql = "INSERT INTO doctors (name, specialty, location, picture, email) VALUES ('$NAME','$SPEC','$LOCA','$FILE','MAIL')";
  mysqli_query($conn, $sql);
  echo "<script>alert('doctor Successfully added');
  window.location.href='http://localhost/IWD-%20GA/GA_DOC/adminPage.php'</script>";
}
 ?>
