<?php
session_start();

include 'function/general.php';

  if(isset($_GET['error'])){
    ?>
    <p>     <?php  echo $_GET['error'];  ?>           </p> <?php

  } else{
    change($_POST['Dname'], $_POST['Selection'],$_POST['Update']);

}
