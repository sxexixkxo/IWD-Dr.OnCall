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
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      position: fixed;

      }
      form {

          width: 1000px;

          border: 3px solid rgb(177, 142, 142);

          padding: 20px;

          background: rgb(85, 54, 54);

          border-radius: 20px;

      }

      h2 {

          text-align: center;

          margin-bottom: 40px;

      }

      input {

          display: block;

          border: 2px solid #ccc;

          width: 95%;

          padding: 10px;

          margin: 10px auto;

          border-radius: 5px;

      }

      label {

          color: #888;

          font-size: 18px;

          padding: 10px;

      }

      button {

          float: right;

          background: rgb(35, 174, 202);

          padding: 10px 15px;

          color: #fff;

          border-radius: 5px;

          margin-right: 10px;

          border: none;

      }

      button:hover{

          opacity: .10;

      }
    </style>
  </head>
  <body>

    <div class="form-body">
      <form class="" action="adding.php" method="post">
        <h2>Add Doctor</h2>
        <?php
        if(isset($_GET['error'])){
        ?>
        <p class="error">
          <?php
          echo $_GET['error'];
          ?>
        </p>
        <?php  }
         ?>

         <div class="form-input">
           <label for="">Doctor Name: </label>
           <input type="text" name="name" value="" placeholder="Doctor Name">
         </div>
         <div class="form-input">
           <label for="">Speciality: </label>
           <input type="text" name="specialty" value="" placeholder="Specialty">
         </div>
         <div class="form-input">
           <label for="">Hospitcal Location: </label>
           <input type="text" name="Location" value="" placeholder="Hospital Location">
         </div>
         <div class="form-input">
           <label for="">Hospitcal Location: </label>
           <input type="file" name="picture" id="picture" /><br />
         </div>
         <div class="form-input">
           <label for="">Hospitcal Location: </label>
           <input type="text" name="email" placeholder="Enter Doctor Email" /><br />
         </div>


         <button type="submit" name="submit">Submit</button>
      </form>
    </div>

  </body>
</html>
