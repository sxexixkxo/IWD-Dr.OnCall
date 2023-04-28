<?php

session_start();

include 'function/general.php';

if(isset($_GET['error'])){
  ?>
  <p>     <?php  echo $_GET['error'];  ?>           </p> <?php

} else{
  add_Doctor($_POST['Name'],$_POST['Specialty'],$_POST['Location']);

}
?>
