 <?php

  // session_start();

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

   <link rel="stylesheet" href="../../css/owl.carousel.min.css">
   <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
   <link rel="stylesheet" href="../../css/magnific-popup.css">

   <link rel="stylesheet" href="../../css/bootstrap-datepicker.css">
   <link rel="stylesheet" href="../../css/jquery.timepicker.css">


   <link rel="stylesheet" href="../../css/flaticon.css">
   <link rel="stylesheet" href="../../css/style.css">
 </head>

 <body>
   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light bg-primary" id="ftco-navbar">
     <div class="container">
       <a class="navbar-brand" href="index.php">Exodus<span class="text-dark">Travel Agency</span></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="oi oi-menu"></span> Menu
       </button>

       <div class="collapse navbar-collapse" id="ftco-nav">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
           <li class="nav-item"><a href="index.php#about" class="nav-link">About</a></li>
           <li class="nav-item "><a href="#" class="nav-link">Destination</a></li>
           <li class="nav-item"><a href="hotel.php" class="nav-link">Hotel</a></li>
           <li class="nav-item"><a href="index.php#blog" class="nav-link">Blog</a></li>
           <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
         </ul>
       </div>
     </div>
   </nav>






   <section class="ftco-section contact-section " style="background-image: url('images/bg_1.jpg');">
     <div class="container">
       <h1 class="text-primary" style=" color:white; padding-left:120px;">BOOKING NOW</h1>
       <div class="row block-9">
         <div class="col-md-6 d-flex bg-light" style="background-image: url('images/Traveler-booking.jpg');">
           <div> <img src="images/Traveler-booking.jpg" alt="" style="height:500px; border-radius:10px"></div>
         </div>
         <div class="col-md-6  d-flex">

           <form action="feedback.php" method="POST" class="bg-light p-5 contact-form">



             <div class="form-group">
               <input type="text" class="form-control" name="location" value="ggg">
             </div>


             <div class="form-group">
               <input type="text" class="form-control" name="name" placeholder="full name">
             </div>
             <div class="form-group">
               <input type="text" class="form-control" name="email" placeholder="Your Email">
             </div>
             <div class="form-group">
               <input type="number" class="form-control" name="number" placeholder="how many people">
             </div>
             <!-- <div class="form-group">
            <textarea  cols="30" rows="7" class="form-control" name="message" placeholder="Message"></textarea>
          </div> -->
             <div class="form-group">
               <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
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
             <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
             <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
               <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
               <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
               <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
             </ul>
           </div>
         </div>
         <div class="col-md pt-5 border-left">
           <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
             <h2 class="ftco-heading-2">Infromation</h2>
             <ul class="list-unstyled">
               <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
               <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
               <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
               <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
               <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
               <li><a href="#" class="py-2 d-block">Call Us</a></li>
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
             <h2 class="ftco-heading-2">Have a Questions?</h2>
             <div class="block-23 mb-3">
               <ul>
                 <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                 <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                 <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">exodustta@gmail.com</span></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-md-12 text-center">

           <p>
             <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
             Copyright &copy;<script>
               document.write(new Date().getFullYear());
             </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
             <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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