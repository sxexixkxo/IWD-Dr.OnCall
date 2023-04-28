<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Schedule An Appointment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/scastyles.css">
  <?php
    include "header.php";
    include "db_connection.php";
    session_start();
    ?>
</head>

<body>
  <div class="cover2">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="main.php">Home</a></li>
          <li class="breadcrumb-item"><a href="search.php">Browse Doctors</a></li>
          <li class="breadcrumb-item active" aria-current="page">Get Consultation</li>
        </ol>
      </nav>
      <div class="container" id="cover-container2"></div>
  </div>
  <div class="container text-center">
    <h3>Schedule An Appointment</h3>
  </div>
  <hr />
  <!--Form START-->
  <div class="container shadow" id="form-container">
    <!--Appointment Details START-->
    <h5>Appointment Details</h5>
    <form action="appointment-act.php" method="POST"  enctype="multipart/form-data">
    <div class="row pb-3">
      <div class="col-6 pt-3">
        <div class="form-floating">
          <select class="form-select" name="doctor-name">
            <option selected>Doctor Name</option>
            <?php
                    $query = "SELECT * FROM doctors GROUP BY name ORDER BY name ASC";
                    $result = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_assoc($result)) {
                      echo '<option value="'.$row["name"].'">'.$row["name"].'</option>';
                    };
                    ?>
          </select>
          <label for="floatingSelect">Doctor Preference</label>
        </div>
      </div>
      <div class="col-6 pt-3">
        <div class="form-floating">
          <select class="form-select" name="method">
            <option selected>Select One Option</option>
            <option>In-Person</option>
            <option>Online</option>
          </select>
          <label for="time">Preferred Consultation Method</label>
        </div>
      </div>
    </div>
    <div class="row pb-3">
      <div class="col-6">
        <label for="date">Preferred Date</label>
        <?php
          $month = date('m');
          $day = date('d');
          $year = date('Y');
          $today = $year . '-' . $month . '-' . $day;
          ?>
        <input type="date" value="<?php echo $today; ?>" class="form-control" min=<?php echo $today; ?> name="date">
      </div>
      <div class="col-6 pt-3">
        <div class="form-floating">
          <select class="form-select" name="time">
            <option selected>Select One Option</option>
            <option>Morning</option>
            <option>Afternoon</option>
          </select>
          <label for="time">Preferred Time</label>
        </div>
      </div>
    </div>
    <!--Patient Details START-->
    <h5>Patient Details</h5>
    <div class="row pb-3">
      <div class="col-6 pt-3">
        <div class="form-floating">
          <input type="text" class="form-control" name="name" placeholder="Full Name" required>
          <label for="patient-name" class="form-label">Patient Full Name</label>
        </div>
      </div>
      <div class="col-6 pt-3">
        <div class="form-floating">
          <input type="text" class="form-control" name="identity" placeholder="IC/Passport Number" required>
          <label for="patient-ic" class="form-label">Patient IC/Passport Number</label>
        </div>
      </div>
    </div>
    <div class="row pb-3">
      <div class="col-6 pt-3">
        <div class="form-floating">
          <input type="email" class="form-control" name="email" placeholder="Contact Email" required>
          <label for="patient-email" class="form-label">Contact Email</label>
        </div>
      </div>
      <div class="col-6 pt-3">
        <div class="form-floating">
          <input type="tel" class="form-control" name="phone" placeholder="Contact Phone Number" required>
          <label for="patient-phone" class="form-label">Contact Phone Number</label>
        </div>
      </div>
    </div>

    <div class="row pb-3">
      <div class="col-12 pt-3">
        <textarea class="form-control" name="requests" rows="2" placeholder="Medical Concerns/Requests (Optional)"></textarea>
      </div>
    </div>
    <!--Patient Details END-->
    <h6> We will reach out to you shortly via phone call for confirmation. Any further instructions will be sent via email.</h6>
    <div class="row pb-3 text-center">
      <div class="col-12 pt-3">
      <input class="btn btn-info btn-lg" name="upload" type="submit" value="Submit Application">
      </form>
    </div>
  </div>
  </div>

  <!--Form END-->
  <hr />
</body>
<foot>
  <?php
    include "footer.php";
    ?>
</foot>

</html>
<script>
</script>
