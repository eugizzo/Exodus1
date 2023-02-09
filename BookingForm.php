<!-- insert booking -->

<?php
include 'dashboard/db/connection.php';
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Exodus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
</head>


<style>
  .card-header {
    font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif;
    font-size: 35px;
    line-height: 35px;
    position: relative;
    font-weight: 500;
    color: rgba(26, 89, 120, 0.9);
    text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.5);
    padding: 0px 0px 20px 10px;
  }
</style>

<body>
 <?php
 include 'header.php';
 ?>

  <section class="ftco-section contact-section  " style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('images/bg_1.jpg');">
    <div class="container">
      <h1 class="card-header pt-5" style=" color:white; padding-left:120px;">BOOKING NOW </h1>
      <div class="row block-9 bg-light" style="border-radius:10px;">
        <div class="col-md-6 d-flex  " style="background-image: url('images/Traveler-booking-removebg-preview.png');">
         <?php
        
        ?>

<?php

$id = $_GET['id'];

$query = "SELECT * FROM `destination` WHERE  id=$id";
$detail = $connect->query($query);

while ($row = $detail->fetch_assoc()) {
  $imageURL = 'dashboard/img/dest/' . $row["file_name"];
}
?>
        <div> <img src="<?php echo $imageURL; ?>" alt="" style="height: 575px; border-radius:20px 20px 20px 20px; padding-top:10px;"></div>
        </div>
        <div class="col-md-6  d-flex">

          <form action="" method="POST" class="bg-light p-5 contact-form">

            <?php
            if (
              isset($_POST["submit"])
              && !empty($_POST['location'])
              && !empty($_POST['name'])
              && !empty($_POST['title'])
              && !empty($_POST['phone'])
              && !empty($_POST['number'])
              && !empty($_POST['email'])
              && !empty($_POST['country'])
            ) {
              
              $location = $_POST['location'];
              $name = $_POST['name'];
              $title = $_POST['title'];
              $phone = $_POST['phone'];
              $email = $_POST['email'];
              $number = $_POST['number'];
              $country = $_POST['country'];
              $status = 0;
              $request = 0;
              $message = 'Dear ' . $name . ' Booking successful for : ' . $title . '  ' . 'Tour.';
              $insert = "INSERT INTO `booking`(`title`, `location`, `name`, `email`, `number`, `phone`,`country`,`date`, `status`, `request`) VALUES (?,?,?,?,?,?,?,?,?,?)";
              $query = $conn->prepare($insert);
              $query->execute(array($title, $location, $name, $email, $number, $phone, $country,date('Y-m-d H:i:s'), $status, $request));

              if ($query) {
            ?>
                <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  <?php echo $message ?>

                </div>
              <?php
              } else {
              ?>
                <div class="alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  please fill all form
                </div><?php
                    }
                  } ?>
            <div class="form-group">
              <?php

              $id = $_GET['id'];

              $query = "SELECT * FROM `destination` WHERE  id=$id";
              $detail = $connect->query($query);

              while ($row = $detail->fetch_assoc()) {
                // $imageURL = '../../dashmin-1.0.0/img/news/'.$row["file_name"];
              ?>
                <input type="text" class="form-control" name="title" value="<?php echo $row["title"] ?>" readonly required="">


            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="location" placeholder="Location" value="<?php echo $row["location"] ?>" readonly required="">
            </div>
          <?php
              }
          ?>
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="full name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="email">
          </div>
          <div class="form-group">
            <input type="date" class="form-control" name="date" placeholder="date">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Enter phone number" value="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="country" placeholder="Enter your country">
          </div>

          <div class="form-group">
            <input type="number" class="form-control" name="number" placeholder="How many room you want to booking">
          </div>
          
          <!-- <div class="form-group">
            <textarea  cols="30" rows="7" class="form-control" name="message" placeholder="Message"></textarea>
          </div> -->
          <div class="form-group">
            <input type="submit" name="submit" value="Booking" class="btn btn-primary py-3 px-12" style="width: 230px;">
          </div>
          </form>

        </div>


      </div>
    </div>
  </section>

<?php
include 'footer.php'
?>

  <!-- loader -->
  

  <script type="text/javascript">
    window.setTimeout(function() {
      $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
        $(this).remove();
      });
    }, 2000);
  </script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>