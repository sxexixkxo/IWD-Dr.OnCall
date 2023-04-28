<?php
  $sname = "localhost";
  $uname = "root";
  $password="";

  $dbname = "web_assignment";

  $conn = mysqli_connect($sname,$uname,$password,$dbname);

  if(!$conn){
    echo "Connection Failed!";
  }
 ?>
