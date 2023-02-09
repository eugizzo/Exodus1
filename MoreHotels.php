
<?php

include 'dashboard/db/connection.php';
session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Exodus Tour and Travel Agency </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
   <?php 
   include './header.php';
   ?>

    <main>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/contact_hero.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Our Hotels</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Favourite Places Start -->
        <div class="favourite-place place-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>FEATURED TOURS Packages</span>
                            <h2>Favourite Places</h2>
                        </div>
                    </div>
                </div>
                <div id="hot ">
                <div class="row mt-4" >
                    <div class="col-lg-12">
                        <div class="section-tittle text-center" >
                            <span>Exodus Tour and Travel Ageny Packages</span>
                            <h2 style="color:#2E6243">Hotels</h2>
                       
                </div>
                </div>
                
               
                <div class="row" >



                <?php
				$query = $connect->query("SELECT * FROM hotels ORDER BY id");

				if ($query->num_rows > 0) {
					while ($row = $query->fetch_assoc()) {
						$imageURL = 'dashboard/img/HotelImages/' . $row["file_name"];

				
						if (!isset($_SESSION['email'])) {


						?>

             <a href="script.php?id=<?= $row["id"]; ?>" >
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="<?php echo $imageURL; ?>" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class=" fas fa-map-marker-alt"></i><span><?php echo $row["location"] ?>  </span> </span>
                                    <h3><a href="#"><?php echo $row["hotelName"] ?></a></h3>
                                    <p class="dolor">$<?php echo $row["price"] ?>  <span>/ Per Person</span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i><?php echo $row["duration"] ?> </li>
                                        <li><i class="fas fa-star "><?php echo $row["near"] ?>  </i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                        </a>

                    
                    <?php
} 
else{


    ?>
    
    <a href="BookingHotel.php?id=<?= $row["id"]; ?> " >
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="<?php echo $imageURL; ?>" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class=" fas fa-map-marker-alt"></i><span><?php echo $row["location"] ?>  </span> </span>
                                    <h3><a href="#"><?php echo $row["hotelName"] ?></a></h3>
                                    <p class="dolor">$<?php echo $row["price"] ?>  <span>/ Per Person</span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i><?php echo $row["duration"] ?> </li>
                                        <li><i class="fas fa-star "><?php echo $row["near"] ?>  </i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                        </a>
    
    <?php

}

}}

    ?>

                </div>
                <a href="MoreHotels.php">
				<div style=""><button class="btn btn-primary ">View more Hotels</button></div>
			</a>
            </div>
        </div>
        <!-- <Hotel Ends Here>  -->

        <!-- Pagination-area End -->
    </main>
    
        
      <?php 
      include './footer.php';
      ?>

	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>