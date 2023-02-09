<?php

include 'dashboard/db/connection.php';

?>



<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Exodus Tour and Travel Agency </title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <link rel="manifest" href="site.webmanifest"> -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
   <!-- Place favicon.ico in the root directory -->
  
  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
  <?php 
  include './header.php';
  ?>
   <!-- slider Area Start-->
   <div class="slider-area ">
      <!-- Mobile Menu -->
      <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/contact_hero.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>Our Blog</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- slider Area End-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <?php
                  $id = $_GET['id'];

$query = "SELECT * FROM `blog` WHERE  id=$id";
$query2 = $connect->query("SELECT * FROM feedback");
$detail = $connect->query($query);

while ($row = $detail->fetch_assoc()) {
  $imageURL = 'dashboard/img/blog/' . $row["file_name"];

?>
                     <img class="img-fluid" src="<?php echo $imageURL; ?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?php echo $row["title"]; ?></h2>
                     
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i><?php echo $row["date"];?> </a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> <?= $query2->num_rows; ?> Comments</a></li>
                     </ul>
                     <p class="excert">
                     <?php echo $row["description"]; ?> 
                     </p>

                   
                  </div>
                  <?php
					}
				
				?>
               </div>
               
             
               <div class="comments-area">
               <?php
          
          $query = $connect->query("SELECT * FROM feedback")
          ?>
                  <h4><?= $query->num_rows; ?> Comments</h4>
                  <div class="comment-list">

                  <?php
              $query = $connect->query("SELECT * FROM feedback ORDER BY id DESC LIMIT 5");

              if ($query->num_rows > 0) {
                while ($row = $query->fetch_assoc()) {
                  $imageURL = 'endUserDashboard/profiles/' . $row["profile"];

              ?>
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="<?php echo $imageURL; ?>" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                              <?php echo $row["comment"] ?>
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#"><?php echo $row["name"] ?></a>
                                    </h5>
                                    <p class="date"><?php echo $row["date"] ?> </p>
                                 </div>
                                 <br>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase text-primary">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>


                     <?php
                }
              }
              ?>
                  </div> 
               </div>
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" method="POST" action="feedback.php" id="commentForm" enctype="multipart/form-data">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="message" placeholder="Message" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" placeholder="Your Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" placeholder="Your Email">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="subject" placeholder="Subject">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="file"  type="file" >
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btns" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Search</button>
                     </form>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Category</h4>
                     <?php
              $query = $connect->query("SELECT * FROM hotels");
              $query2 = $connect->query("SELECT * FROM destination");
              $query3 = $connect->query("SELECT * FROM feedback");
              $query4 = $connect->query("SELECT * FROM gallery")


              ?>
                     <ul class="list cat-list">
                        <li>
                           <a href="#" class="d-flex">
                              <p><a href="hotel.php">Hotels <span>(<?= $query->num_rows; ?>)</span></a></p>
                              
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Travel news</p>
                              <p>(<?= $query2->num_rows; ?>)</p>
                           </a>
                        </li>
                        <li>
                           <a href="index.php#comments" class="d-flex">
                              <p>Comments</p>
                              <p>(<?= $query3->num_rows; ?>)</p>
                           </a>
                        </li>
                        <li>
                           <a href="gallery.php" class="d-flex">
                              <p>gallery</p>
                              <p>(<?= $query4->num_rows; ?>)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Modern technology</p>
                              <p>(<?= $query2->num_rows; ?>)</p>
                           </a>
                        </li>
                       
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     <?php
            $query = "SELECT * FROM `blog` ORDER BY id DESC LIMIT 10";
            $detail = $connect->query($query);
            while ($row = $detail->fetch_assoc()) {
              $imageURL = 'dashboard/img/blog/' . $row["file_name"];
            ?>
                     <div class="media post_item">
                        <img src="<?php echo $imageURL; ?>" width=80px; alt="post">
                        <div class="media-body">
                           <a href="single-blog.php?id=<?= $row["id"]; ?>">
                              <h3>From life was you fish...</h3>
                           </a>
                           <p>January 12, 2019</p>
                        </div>
                     </div>
                     <?php
            } ?>
                    
                  </aside>
                  <aside class="single_sidebar_widget tag_cloud_widget">
                     <h4 class="widget_title">Tag services</h4>
                     <ul class="list">
                        <li>
                           <a href="#">Groups Tour to Israel and Egypt<</a>
                        </li>
                        <li>
                           <a href="#">Visa Processing, Cheap Flight Tickets</a>
                        </li>
                        <li>
                           <a href="#">DHL Services </a>
                        </li>
                        <li>
                           <a href="#">Hotel Booking & Reservation</a>
                        </li>
                        <li>
                           <a href="#">Group Tours & Vacation Packages</a>
                        </li>
                        <li>
                           <a href="#">School and Work in Canada & USA</a>
                        </li>
                        <li>
                           <a href="#">Insurance Services</a>
                        </li>
                        <li>
                           <a href="#">Local Tour</a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget instagram_feeds">
           <h4 class="widget_title">Instagram Feeds</h4>
                     <ul class="instagram_row flex-wrap">

                     
                  <?php
      $query = $connect->query("SELECT * FROM gallery ORDER BY id DESC LIMIT 6");
      while ($row = $query->fetch_assoc()) {
        $imageURL = 'dashboard/img/gallery/' . $row["image"];
        if ($query->num_rows > 0) {
      ?>
          
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="<?php echo $imageURL; ?>" alt="">
                           </a>
                        </li>


                        <?php
                     }}
                     ?>
                       
                     </ul>
                  </aside>

               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

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
      <!-- Date Picker -->
      <script src="./assets/js/gijgo.min.js"></script>
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