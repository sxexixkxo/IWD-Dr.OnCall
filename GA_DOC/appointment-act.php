<?php
session_start();
include "db_connection.php";
if(isset($_POST['upload'])){
  $DOC = $_POST['doctor-name'];
  $METHOD = $_POST['method'];
  $DATE = $_POST['date'];
  $TIME = $_POST['time'];
  $PATIENT = $_POST['name'];
  $ID = $_POST['identity'];
  $MAIL = $_POST['email'];
  $PHONE = $_POST['phone'];
  $REQ = $_POST['requests'];
  $sql = "INSERT INTO appointment (doctor, method, day, timeslot, name, identification, email, phone, request) VALUES ('$DOC','$METHOD','$DATE','$TIME','$PATIENT', '$ID','$MAIL','$PHONE','$REQ')";
  mysqli_query($conn, $sql);
  echo "<script>alert('Appointment Successfully made');
  window.location.href='http://localhost/IWD-%20GA/GA_DOC/main.php'</script>";
}
 ?>
