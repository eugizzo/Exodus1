<?php
include '../../enduser/layout/loginHeader.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- <title>DASHMIN - Bootstrap Admin Template</title> -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">


    <link rel="stylesheet" href="../../enduser/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="../../enduser/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="../../enduser/assets/css/ticker-style.css">
            <link rel="stylesheet" href="../../enduser/assets/css/flaticon.css">
            <link rel="stylesheet" href="../../enduser/assets/css/slicknav.css">
            <link rel="stylesheet" href="../../enduser/assets/css/animate.min.css">
            <link rel="stylesheet" href="../../enduser/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="../../enduser/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="../../enduser/assets/css/themify-icons.css">
            <link rel="stylesheet" href="../../enduser/assets/css/slick.css">
            <link rel="stylesheet" href="../../enduser/assets/css/nice-select.css">
            <link rel="stylesheet" href="../../enduser/assets/css/style.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>





<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-80 justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-8 col-xl-8">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>ADMIN</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                        <form method="POST" action="loginCheck.php">
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        <p class="text-center mb-0">Don't have an Account? <a href="">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
<?php
include '../../enduser/layout/footer.php'
?>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/chart/chart.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="..lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>





    <script src="../..enduser/assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="../..enduser/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../..enduser/assets/js/popper.min.js"></script>
        <script src="../..enduser/assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="../..enduser/assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="../../enduser/assets/js/owl.carousel.min.js"></script>
        <script src="../..enduser/assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="../..enduser/assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="../..enduser/assets/js/wow.min.js"></script>
		<script src="../..enduser/assets/js/animated.headline.js"></script>
        <script src="../..enduser/assets/js/jquery.magnific-popup.js"></script>

        <!-- Breaking New Pluging -->
        <script src="../..enduser/assets/js/jquery.ticker.js"></script>
        <script src="../..enduser/assets/js/site.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="../..enduser/assets/js/jquery.scrollUp.min.js"></script>
        <script src="../..enduser/assets/js/jquery.nice-select.min.js"></script>
		<script src="../..enduser/assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="../..enduser/assets/js/contact.js"></script>
        <script src="../..enduser/assets/js/jquery.form.js"></script>
        <script src="../..enduser/assets/js/jquery.validate.min.js"></script>
        <script src="../..enduser/assets/js/mail-script.js"></script>
        <script src="../..enduser/assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="../..enduser/assets/js/plugins.js"></script>
        <script src="../..enduser/assets/js/main.js"></script>
</body>

</html>