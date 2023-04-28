<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/scastyles.css">
    <?php
      include "header.php";
      ?>
    <style media="screen">
      body{
      background-color : #EDEDED;
      }
      ul{
      list-style-type: none;
      font-size: 30px;
      text-align: center;
      font-weight: bold;
      justify-content: space-around;
      }
      ul a{
        color: black;
        text-decoration: none;
      }
      #flex-box{
        display: flex;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: fixed;

      }
    </style>
  </head>
  <body>
    <div id="flex-box">
      <ul>
        <li><a href="add-doc.php"><img src="" , alt="" /><br>Add Doctor</a></li>
        <li><a href="EditDoctor.php"><img src="" , alt="" /><br>Edit Doctor Information</a></li>
        <li><a href="DeleteDoctor.php"><img src="" , alt="" /><br>Remove Doctor</a></li>
      </ul>
    </div>

  </body>
</html>
