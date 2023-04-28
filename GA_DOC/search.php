<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Browse Doctors</title>
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
  <div class="cover">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="main.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Browse Doctors</li>
        </ol>
      </nav>
    <div class="container" id="cover-container">
  <div class="container my-5 pt-3 shadow p-3 mb-5 bg-white rounded text-center">
    <br />
    <h3>Search Based On Your Needs</h3><br />
    <!-- Filters START -->
    <div class="filters">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="form-floating">
              <select class="form-select" id="hospital-filter">
                <option selected>All Hospitals</option>
                <?php
                      $query = "SELECT * FROM doctors GROUP BY location ORDER BY location ASC";
                      $result = mysqli_query($conn,$query);
                      while($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="'.$row["location"].'">'.$row["location"].'</option>';
                      };
                      ?>
              </select>
              <label for="floatingSelect">Search By Hospital</label>
            </div>
          </div>
          <div class="col">
            <div class="form-floating">
              <select class="form-select" id="specialty-filter">
                <option selected>All Specialties</option>
                <?php
                      $query = "SELECT * FROM doctors GROUP BY specialty ORDER BY specialty ASC";
                      $result = mysqli_query($conn,$query);
                      while($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="'.$row["specialty"].'">'.$row["specialty"].'</option>';
                      };
                      ?>
              </select>
              <label for="floatingSelect">Search By Specialty</label>
            </div>
          </div>
          <br /><br /><br />
            <input class="btn btn-info btn-lg" type="submit" value="Apply Filters" onclick=searchFilter()>
        </div>

      </div>
    </div>
  </div>
  </div>

  </div>
      <!-- Filters END -->

  <!-- Display Container START-->
  <div class="container" id="display-container">
      <div class="card-list" id="card-list">
        <div class="col">


        <div class="row">
          <?php
            include "db_connection.php";
            $sql = "SELECT * FROM doctors ";
            $query_run = mysqli_query($conn,$sql)
            ?>
          <?php
            while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <div class="card">
              <div class="card-body">
                <?php
                  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['picture']).'"/ class="card-img-top">';
                   ?>
                <br /><br /><h5 class="card-name"><?php echo $row['name'];?></h5>
                <h5>Specialty</h5>
                <h6 class="card-specialty"><?php echo $row['specialty']; ?></h6>
                <h5>Location</h5>
                <h6 class="card-location"><?php echo $row['location']; ?></h6>
                <a href="appointment.php" class="btn btn-info">Consult</a>
              </div>
              </div>
            <?php
              }
               ?>
          </div>
      </div>
    </div>
  </div>
          </div>
  <!-- Display Container END-->

</body>
<foot>
  <?php
    include "footer.php";
    ?>
</foot>

</html>

<script>
  function searchFilter() {
    var hospFilter = document.getElementById("hospital-filter").value;
    var specFilter = document.getElementById("specialty-filter").value;
    var items = 0;
    const cardContainer = document.getElementById("card-list");
    const cards = cardContainer.getElementsByClassName("card");
    for(let i = 0; i < cards.length; i++){
      let specialty = cards[i].querySelector(".card-specialty");
      let hospital = cards[i].querySelector(".card-location");
      if ( specFilter == specialty.innerText && hospFilter == hospital.innerText){
        cards[i].style.display = "";
        items++;
      }else if ( specFilter == "All Specialties" && hospFilter == "All Hospitals"){
        cards[i].style.display = "";
        items++;
      }else if ( specFilter == specialty.innerText && hospFilter == "All Hospitals"){
        cards[i].style.display = "";
        items++;
      }else if ( specFilter == "All Specialties" && hospFilter == hospital.innerText){
        cards[i].style.display = "";
        items++;
      }else {
        cards[i].style.display = "none";
      }
    }
  }
</script>
