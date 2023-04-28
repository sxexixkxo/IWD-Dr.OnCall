<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body{
      background-color : #EDEDED;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      position: fixed;

      }
      table {

          width: 1000px;

          border: 3px solid rgb(177, 142, 142);

          padding: 20px;

          background: rgb(85, 54, 54);

          border-radius: 20px;

          text-align: center;
      }

      td {

          color: #888;

          font-size: 18px;

          padding: 10px;

      }
      th{
        color: #black;
        font-size: 32px;
        padding: 10px;


      }


      }
    </style>
  </head>
  <body>
    <div class="center">
        <table >
            <tr>
                <th>Name</th>
                <th>Specialisation</th>
                <th>Location</th>
            </tr>
    </div>
        <?php
        include 'function/db_conn.php';
        require 'function/general.php';

        $sql = "Select * FROM `doctor` ORDER BY `name` ASC";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck>0){

            while($row = mysqli_fetch_assoc($result)){
                echo "<tr><td>".$row['name']."</td><td>".$row['specialisation']."</td><td>".$row['location'];
            }
            echo "</table>";
        }
        ?>
  </body>
</html>
