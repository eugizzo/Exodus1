 <!-- insert booking -->

 <?php
  include 'dashboard/db/connection.php';

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
   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light shadow " id="ftco-navbar">
     <div class="container">
       <a class="navbar-brand text-primary" href="index.php">Exodus<span class="text-white">Travel Agency</span></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="oi oi-menu"></span> Menu
       </button>

       <div class="collapse navbar-collapse" id="ftco-nav">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
           <li class="nav-item"><a href="index.php#about" class="nav-link">About</a></li>
           <li class="nav-item "><a href="index.php#destination" class="nav-link">Destination</a></li>
           <li class="nav-item"><a href="hotel.php" class="nav-link">Hotel</a></li>
           <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
           <li class="nav-item"><a href="index.php#blog" class="nav-link">Blog</a></li>
           <li class="nav-item"><a href="index.php#service" class="nav-link">Service</a></li>
           <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>

         </ul>
         <a href="signup_page.php"><button style="border-radius: 10px; background-color: #007bff; height: 40px; width: 100px; color:white">register</button></a>
       </div>
     </div>
   </nav>

   <section class="ftco-section contact-section  " style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('images/bg_1.jpg');">
     <div class="container">
       <h1 class="card-header pt-5" style=" color:white; padding-left:120px;">BOOKING NOW </h1>
       <div class="row block-9 bg-light" style="border-radius:10px;">
         <div class="col-md-6 d-flex  " style="background-image: url('images/Traveler-booking.jpg');">
           <div> <img src="images/Traveler-booking.jpg" alt="" style="height: 575px; border-radius:20px 20px 20px 20px; padding-top:10px;"></div>
         </div>
         <div class="col-md-6  d-flex">

           <form action="" method="POST" class="bg-light p-5 contact-form">

             <?php
              if (
                isset($_POST["submit"])

                && !empty($_POST['title'])
                && !empty($_POST['name'])
                && !empty($_POST['phone'])
                && !empty($_POST['date'])
                && !empty($_POST['number'])
                && !empty($_POST['location'])
              ) {

                $title = $_POST['title'];
                $location = $_POST['location'];
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $date = $_POST['date'];
                $number = $_POST['number'];
                $status = '0';
                $request = '0';
                $message = 'Dear ' . $name . ' the request have been received for: ' . $title;

                $insert = "INSERT INTO `bookinghotel`(`hotelName`, `phone`, `fullName`, `email`, `date`, `status`, `request`, `numberOfroom`, `Location`) VALUES (?,?,?,?,?,?,?,?,?)";



                $query = $conn->prepare($insert);

                $query->execute(array($title, $phone, $name, $email, $date, $status, $request, $number, $location));

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
                   it not booked please call admin for help
                 </div><?php
                      }
                    } else {
                        ?>
               <div class="alert alert-danger alert-dismissable">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                 please fill all form
               </div><?php
                    } ?>
             <div class="form-group">
               <?php

                $id = $_GET['id'];

                $query = "SELECT * FROM `hotels` WHERE  id=$id";
                $detail = $connect->query($query);

                while ($row = $detail->fetch_assoc()) {
                  // $imageURL = '../../dashmin-1.0.0/img/news/'.$row["file_name"];
                ?>
                 <input type="text" class="form-control" name="title" value="<?php echo $row["hotelName"] ?>" readonly required="">


             </div>

             <div class="form-group">
               <input type="text" class="form-control" name="location" placeholder="Location" value="<?php echo $row["location"] ?>/ <?php echo $row["near"] ?>" readonly required="">
             </div>
           <?php
                }
            ?>
           <div class="form-group">
             <input type="text" class="form-control" name="name" placeholder="full name" require>
           </div>
           <div class="form-group">
             <input type="email" class="form-control" name="email" placeholder="email" require>
           </div>
           <div class="form-group">
             <input type="date" class="form-control" name="date" placeholder="date">
           </div>
           <div class="form-group">
             <input type="text" class="form-control" name="phone" placeholder="enter phone number" value="">
           </div>
           <div class="form-group">
             <input type="number" class="form-control" name="number" placeholder="how many room you want to booking">
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

   <footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md pt-5">
                <div class="ftco-footer-widget pt-md-5 mb-4">
                    <h2 class="ftco-heading-2">About</h2>
                    <p>Exodus Tour and Travel Agency is the premier choice for travelers looking to explore the beauty and diversity of Africa. With a team of experienced and knowledgeable travel experts, Exodus provides customized and high-quality tour packages that cater to the unique interests and needs of each customer. From safari trips to cultural tours, Exodus offers a wide range of options for travelers to choose from.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                        <li class="ftco-animate"><a href="https://twitter.com/home" target="
                        _blank"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/exodus.tour.7" target="
                        _blank"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/toursexodus/" target="
                        _blank"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md pt-5 border-left">
                <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Our Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Groups Tour to Israel and Egypt</a></a></li>
                        <li><a href="#" class="py-2 d-block">Visa Processing, Cheap Flight Tickets</a></li>
                        <li><a href="#" class="py-2 d-block">Hotel Booking & Reservation</a></li>
                        <li><a href="#" class="py-2 d-block">Group Tours & Vacation Packages</a></li>
                        <li><a href="#" class="py-2 d-block">DHL Services</a></li>
                        <li><a href="#" class="py-2 d-block">School and Work in Canada & USA</a></li>
                        <li><a href="#" class="py-2 d-block">Insurance Services</a></a></li>
                        <li><a href="#" class="py-2 d-block">Local Tour</a></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md pt-5 border-left">
                <div class="ftco-footer-widget pt-md-5 mb-4">
                    <h2 class="ftco-heading-2">Experience</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Adventure</a></li>
                        <li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
                        <li><a href="#" class="py-2 d-block">Beach</a></li>
                        <li><a href="#" class="py-2 d-block">Nature</a></li>
                        <li><a href="#" class="py-2 d-block">Camping</a></li>
                        <li><a href="#" class="py-2 d-block">Party</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md pt-5 border-left">
                <div class="ftco-footer-widget pt-md-5 mb-4">
                    <h2 class="ftco-heading-2">Have a Questions? Find us Here</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map-marker"></span><span class="text">Kigali Kicukiro - Remera, Rwanda</span></li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+250788608558</span></a></li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+250788726181</span></a></li>
                            <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">exodustta@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Exodus Tour and Travel Agency
                </p>
            </div>
        </div>
    </div>
</footer>


   <!-- loader -->
   <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
       <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
       <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
     </svg></div>

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