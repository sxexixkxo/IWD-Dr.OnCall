<?php
//main page before account registration or login
  require 'db_connection.php';

  session_start();

  if(!empty($_SESSION["id"])){
    header("Location: main.php");
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name= "viewport" content= "width= device-width, initial-scale= 1, shrink-to-fit= no" />
    <title>Dr.OnCall</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
     crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
     crossorigin="anonymous">

    <!--internal CSS-->
    <style media="screen">
      #header{
        background: url(image/header2.jpeg);
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 100%;
        width: 100%;
      }

      h1{
        color: white;
      }

      /* main page css */
      footer{
        padding-bottom: 40vh;
        background-color: #EDEDED;
      }

      #footer-info{
        height: 30vh;
        width: 40%;
        float: left;
        margin-top: 10px;
      }

      #footer-contact{
        height: 30vh;
        width: 40%;
        float: left;
        margin-left: 20px;
      }
    </style>
  </head>

  <body>
    <nav class= "navbar navbar-expand-lg navbar-dark" style= "background: linear-gradient(to left, #00EFD1, #00ACEA);">
      <div class= "container">
        <a href= "" class= "navbar-brand"><i class= "fa fa-user-md mr-2"></i><strong>Dr.OnCall</strong></a>
      </div>
    </nav>

    <section id= "header" class= "jumbotron text-center">
        <h1><strong>Dr.OnCall</strong></h1>
        <a href= "register.php" class= "btn btn-outline-light">Register</a>
        <a href= "loginAcc.php" class= "btn btn-outline-light">Login</a>
    </section>

    <div class="">
      <section id= "gallery">
        <div class= "container">
          <div class= "row">
            <div class= "col-lg-4 mb-4">
              <div class= "card">
                <img class= "card-img-top" src= "image/docs.png" alt="doctors'info"/>
                <div class= "card-body">
                  <h5 class= "card-title">Available Doctors</h5>
                  <p class= "card-text">
                    Browse the list of available doctors and have a look at their information before your medical consultation.
                  </p>
                  <a href= "search.php" class= "btn btn-outline-info btn-lg">Browse</a>
                </div>
              </div>
            </div>

            <div class= "col-lg-4 mb-4">
              <div class= "card">
                <img class= "card-img-top" src= "image/search.png" alt="search"/>
                <div class= "card-body">
                  <h5 class= "card-title">Search Consultant</h5>
                  <p class= "card-text">
                    Find your suitable health consultant by choosing your preferred hospitals or specialties.
                  </p>
                    <a href= "search.php" class= "btn btn-outline-info btn-lg">Search</a>
                </div>
              </div>
            </div>

            <div class= "col-lg-4 mb-4">
              <div class= "card">
                <img class= "card-img-top" src= "image/makeAppoint.png" alt="consult"/>
                <div class= "card-body">
                  <h5 class= "card-title">Consultation</h5>
                  <p class= "card-text">
                    Make an appointment with your preferred doctors or have a live consultation with the doctors now.
                  </p>
                  <a href= "loginAcc.php" class= "btn btn-outline-info btn-lg">Consult</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>

  <footer>
      <div id="footer-info">
        <p>&copyCopyright 2022 Dr.OnCall. All rights reserved.</p>
        <p><a href="#">Terms of Serive</a> | <a href="#">Privacy</a></p>
      </div>

      <div id="footer-contact">
        <ul>
          <h3>Contact us</h3>
          <p>UOW Malaysia KDU University College</p>
          <p>Jalan Kontraktor U1/14, Glenpark U1, 40150 Shah Alam, Selangor</p>
          <p>Phone: +603-55650538</p>
          <p>Email: enquiry@uowmkdu.edu.my</p>
        </ul>
      </div>
  </footer>
</html>
