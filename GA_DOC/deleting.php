<?php
session_start();

include 'function/general.php';

  if(isset($_GET['error'])){
    ?>
    <p>     <?php  echo $_GET['error'];  ?>           </p> <?php

  } else{
    delete($_POST['Dname']);

}
