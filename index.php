
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
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon1.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="./jquerry.js">
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
            <link rel="stylesheet" href="./pop/style.css">
            <script src="./pop/js.js"></script>
            
   </head>
   <style>
	html {
		scroll-behavior: smooth;
		padding-top: 10px;
	}
</style>


<style>
  .hovereffect {
    width: 100%;
    height: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
  }

  .hovereffect .overlay {
    width: 100%;
    height: 100%;
    position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
  }

  .hovereffect img {
    display: block;
    position: relative;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    -webkit-transition: all 0.35s;
    transition: all 0.35s;
  }

  .hovereffect:hover img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.7" /><feFuncG type="linear" slope="0.7" /><feFuncB type="linear" slope="0.7" /></feComponentTransfer></filter></svg>#filter');
    filter: brightness(0.7);
    -webkit-filter: brightness(0.7);
  }

  .hovereffect h2 {
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    width: 100%;
  }

  .hovereffect:hover h2 {
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transform: translate3d(-50%, -50%, 0) scale3d(0.8, 0.8, 1);
    transform: translate3d(-50%, -50%, 0) scale3d(0.8, 0.8, 1);
  }
</style>

<body>
    <?php
    include './header.php'
    ?>

    <style>
        .slider-area {
            background-image: url('./assets/images/jerusalem/pexels-kostiantyn-stupak-190339.jpg');
            background-size: 100%,70%;
            background-repeat: no-repeat;
            width: 100%;
            height: 80%;
        }

        .hero__caption>h1>span {
            font-size: 20px;



        }

        .hero__caption p {
            color: white;
        }
        .man{
            color: white;
        }

        .card:hover{
     /* transform: scale(1.05); */
  box-shadow: 0 10px 20px RGB(0 123 255), 0 4px 8px RGB(47 181 101);

}
       
    </style>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider hero-overly  slider-height d-flex align-items-center" data-background="">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="hero__caption">
                                    <h2>Make Your <span style="color:white;font-size:50px;">Tour Memorable</span>  and Safe With Us </h2>
                                    <p>Best <span style="color:#0E1C35">Tour and Travel</span> in Rwanda</p>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- form -->
                                <form action="#" class="search-box">
                                    <div class="input-form mb-30">
                                        <p class="man">Travel to the any corner of the world, without going around in circles.
                                      Exodus Tour and Travel Agency leads you to a countries which offers a unique combination of history, culture, and natural beauty.</p>
                                    </div>

                                    <div class="search-form mb-30">
                                        <a href="#">Book Now</a>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
       
        <!-- Favourite Places Start -->
        <div class="favourite-place place-padding" id="destination">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <!-- <span>Exodus Tour and Travel Ageny Packages</span> -->
                            <h2 style="color:#2E6243">Select Your Tour Destination</h2>
                        </div>
                    </div>
                </div>
                <div class="row">







<?php
				$query = $connect->query("SELECT * FROM destination ORDER BY id DESC LIMIT 6");

				if ($query->num_rows > 0) {
					while ($row = $query->fetch_assoc()) {
						$imageURL = 'dashboard/img/dest/' . $row["file_name"];

				
						if (!isset($_SESSION['email'])) {


						?>
                         <a href="script.php?id=<?= $row["id"]; ?>" >
                    <div class="col-xl-4 col-lg-4 col-md-6 card px-2 mt-1 ">
                        <div class="single-place mb-30">

                        
								
                            <div class="place-img">
                                <img src="<?php echo $imageURL; ?>" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#"><?php echo $row["title"] ?></a></h3>
                                    <p class="dolor">$<?php echo $row["price"] ?> <span>/ Per Person</span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i><?php echo $row["time"] ?></li>
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo $row["location"] ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                        </a>



                    <?php
} else {

    ?>
    
    <a href="BookingForm.php?id=<?= $row["id"]; ?> " >
                    <div class="col-xl-4 col-lg-4 col-md-6 border-shadow">
                        <div class="single-place mb-30">

                        
								
                            <div class="place-img">
                                <img src="<?php echo $imageURL; ?>" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-map-marker-alt "></i><span><?php echo $row["location"] ?></span> </span>
                                    <h3><a href="#"><?php echo $row["title"] ?></a></h3>
                                    <p class="dolor">$<?php echo $row["price"] ?> <span>/ Per Person</span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i><?php echo $row["time"] ?></li>
                                        <li><i class="flaticon-mountains"><?php echo $row["near"] ?></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                        </a>
    
    <?php


                    }}}
								?>




<a href="destination.php">
				<div style=""><button class="btn btn-primary ">View more Tour</button></div>
			</a>

                    
                </div>
                <div id="hot" style="background: #f7f7f7; width:100%">
                <div class="row mt-4" >
                    <div class="col-lg-12">
                        <div class="section-tittle text-center pt-4" >
                            <span style="color:#0E1C35">Exodus Tour and Travel Ageny Packages</span>
                            <h2 style="color:#2E6243">Hotels</h2>
                       
                </div>
                </div>
                
               
                <div class="row " >



                <?php
				$query = $connect->query("SELECT * FROM hotels ORDER BY id DESC LIMIT 6");

				if ($query->num_rows > 0) {
					while ($row = $query->fetch_assoc()) {
						$imageURL = 'dashboard/img/HotelImages/' . $row["file_name"];

				
						if (!isset($_SESSION['email'])) {


						?>

             <a href="script.php?id=<?= $row["id"]; ?>" >
                    <div class="col-xl-4 col-lg-4 col-md-6 card p-4">
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

        <!-- Favourite Places End -->
       <!-- Video Start Arera -->
        <div class="video-area video-bg pt-200 pb-200"  data-background="assets/img/service/video-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-caption text-center">
                            <div class="video-icon">
                                <a class="vpop" data-type="youtube" data-id="6xcG6ttMDVY" data-autoplay='true' href="https://www.youtube.com/watch?v=s3LZ1xXYTlI" target="_blank" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4" tabindex="0"><i class="fas fa-play"></i></a>
                            </div>
                            <p class="pera1">Love where you're going in the perfect time</p>
                            <p class="pera2">Tripo is a World Leading Online</p>
                            <p class="pera3"> Tour Booking Platform</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Start End -->
        <!-- Support Company Start-->
        <div class="support-company-area support-padding fix " id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img mb-50">
                            <img src="assets/img/service/support-img.jpg" alt="">
                            <div class="support-img-cap">
                                <span>Since 1992</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                                <span  class="text-success">About Our Company</span>
                                <h2>We are Go Trip <br>Ravels Support Company</h2>
                            </div>
                            <div class="support-caption">
                                <p>Exodus Tour and Travel Agency leads you to a countries which offers a unique combination of history, culture, and natural beauty. The main attractions that draw visitors to Israel include the ancient city of Jerusalem, considered one of the holiest places in the world for Jews, Christians, and Muslims, where visitors can see the Western Wall, the Dome of the Rock, and the Church of the Holy Sepulchre. The Dead Sea, the lowest point on Earth, is known for its mineral-rich waters and therapeutic properties. The ancient fortress of Masada offers a breathtaking view of the surrounding desert.</p>
                                <div class="select-suport-items">
                                    <label class="single-items">Lorem ipsum dolor sit amet
                                        <input type="checkbox" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="single-items">Consectetur adipisicing sed do
                                        <input type="checkbox" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="single-items">Eiusmod tempor incididunt
                                        <input type="checkbox" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="single-items">Ad minim veniam, quis nostrud.
                                        <input type="checkbox" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <a href="about.php" class="btn border-btn">About us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->
        <!-- Testimonial Start -->
        <!-- Testimonial Start -->






<?php 
include './comment.php';

?>


 <!-- Service Start -->
 <div class="container-xxl py-5" id="service">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Our Services</p>
                <h1 class="display-5 mb-5" style="color:#2E6243">Services That We Offer For You</h1>
            </div>
            <div class="row g-4">
                
            <?php

            $query = $connect->query("SELECT * FROM services ORDER BY id DESC ");
            while ($row = $query->fetch_assoc()) {
                $imageURL = 'dashboard/img/services/' . $row["file_name"];
                if ($query->num_rows > 0) {
            ?>

               
                
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?php echo $imageURL; ?>" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid rounded-circle" src="<?php echo $imageURL; ?>"  alt="Icon">
                            </div>
                            <h4 class="mb-3"><?php echo $row["title"] ?> </h4>
                            <p class="mb-4"><?php echo $row["description"] ?> </p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>


                <?php
          }
        }
  ?>
	
            </div>
        </div>
    </div>
    <!-- Service End -->





       <!-- Blog Area Start -->
       <div class="home-blog-area section-padding2" id="blog">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Our Recent news</span>
                            <h1 style="color:#2E6243">Tourist Blog</h1>
                        </div>
                    </div>
                </div>
                <div class="row">

                <?php

$query = $connect->query("SELECT * FROM blog ORDER BY id DESC LIMIT 6 ");
while ($row = $query->fetch_assoc()) {
    $imageURL = 'dashboard/img/blog/' . $row["file_name"];
    if ($query->num_rows > 0) {
?>
<a href="./single-blog.php?id=<?=$row["id"]; ?>">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="<?php echo $imageURL; ?>" alt="">
                                </div>
                                <div >
                                    <p> <i class="far fa-clock"></i><?php echo $row["date"] ?></p>
                                    <h6><a href="single-blog.php"><?php echo $row["title"] ?></a></h6>
                                    <a href="./single-blog.php?id=<?=$row["id"]; ?>" class="btn btn-primary">Read more »</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
    </a>
                    <?php
          }
        }
  ?>

                </div>
            </div>
        </div>
        <!-- Blog Area End -->



      
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