<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
session_start();
include '../db/connection.php';


if (!isset($_SESSION['email'])) {
    header('location:../signup_page.php');
}


$id = $_GET['id'];

//   echo $id;
$update = "SELECT * FROM gallery WHERE id=$id";

$query = $conn->prepare($update);
$query->execute();

$user = $query->fetch(PDO::FETCH_OBJ);



?>


<?php

if (isset($_POST['update'])) {

    include '../db/connection.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
   
    // $description = $_POST['description'];
  

    $c_image = $_FILES['file']['name'];
    $old_image = $_POST['file_old'];
    $c_image_temp = $_FILES['file']['tmp_name'];

    if ($c_image != '') {
        $update_c_image = $c_image;
    } else {
        $update_c_image = $old_image;
    }

    // if (file_exists('../img/gallery/' . $c_image)) {
    //     $filename = $_FILES['file']['name'];
    //     $_SESSION['status'] = 'image already Exist' . $filename;
    //     // header('Location:edit.php?id=<?=echo $id');
    // } else {
        $c_update = "update gallery set title='$title', image='$update_c_image'
	where id='$id'";

        $run_update = mysqli_query($connect, $c_update);
        if ($run_update) {

            if ($c_image != '') {
                move_uploaded_file($c_image_temp, "../img/galery/$c_image");
                $trimed_path = trim('../img/gallery/' . $old_image);
                unlink($trimed_path);
            }

            $_SESSION['status'] = 'gallery update successful';
            header('Location:listOfGallery.php');
        } else {
            $_SESSION['status'] = 'hotel Not updated';
            header('Location:listOfGallery.php');
        }
    // }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Exodus</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

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


        <!-- Sidebar Start -->
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">Exodus</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php echo $_SESSION['admin']; ?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['email']; ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="../index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2 text-primary"></i>Dashboard</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-calendar me-2 text-primary"></i>Destination</a>
                        <div class="dropdown-menu bg-transparent border-0" style="padding-left: 30px;">
                            <a href="#" class="dropdown-item active"><i class="fa fa-plus-circle me-2 text-primary"></i>Add Destination</a>
                            <a href="destList.php" class="dropdown-item "><i class="fa fa-file me-2 text-primary"></i>destination List</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-circle me-2 text-primary"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0" style="padding-left: 30px;">
                            <a href="../adduser/adduser.php" class="nav-item nav-link"><i class="fa fa-plus-circle me-2 text-primary"></i> Add Users</a>
                            <a href="../adduser/listuser.php" class="dropdown-item"><i class="fa fa-file me-2 text-primary"></i>UserList</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-image me-2 text-primary"></i>Gallery</a>
                        <div class="dropdown-menu bg-transparent border-0" style="padding-left: 30px;">
                            <a href="../gallery/insertGallery.php" class="nav-item nav-link "><i class="fa fa-plus-circle me-2 text-primary"></i> Add Gallery</a>
                            <a href="../gallery/listOfGallery.php" class="dropdown-item"><i class="fa fa-file me-2 text-primary"></i>Gallery list</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fa fa-laptop me-2 text-primary"></i>Hotel</a>
                        <div class="dropdown-menu bg-transparent border-0" style="padding-left: 30px;">
                            <a href="../hotels/hotelPages.php" class="dropdown-item "><i class="fa fa-plus-circle me-2 text-primary"></i>Add Hotel </a>
                            <a href="../hotels/hotelList.php" class="dropdown-item"><i class="fa fa-file me-2 text-primary"></i>Hotel list</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fa fa-laptop me-2 text-primary"></i>View booking</a>
                        <div class="dropdown-menu bg-transparent border-0" style="padding-left: 30px;">
                            <a href="../Booked/BookedDestination.php" class="dropdown-item "><i class="fa fa-plus-circle me-2 text-primary"></i>Tour Booking </a>
                            <a href="../Booked/BookedHotel.php" class="dropdown-item"><i class="fa fa-file me-2 text-primary"></i>Hotel Booking</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fa fa-laptop me-2 text-primary"></i>services</a>
                        <div class="dropdown-menu bg-transparent border-0" style="padding-left: 30px;">
                            <a href="../service/services.php" class="dropdown-item "><i class="fa fa-plus-circle me-2 text-primary"></i>Addservice </a>
                            <a href="../service/serviceList.php" class="dropdown-item"><i class="fa fa-file me-2 text-primary"></i>serviceList</a>
                        </div>
                    </div>
                    <a href="../feedback/feedback.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2 text-primary"></i>feedback</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?php echo $_SESSION['admin']; ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['email']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Sale & Revenue Start -->

            <!-- Sale & Revenue End -->

            <!-- Sales Chart Start -->

            <!-- Recent Sales Start -->

            <!-- Recent Sales End -->
            <div class="row">
                <div class="col-sm-3" style="background-color: #f3f6f9;"></div>
                <div class="col-sm-6 " style="padding-top: 10px;">
                    <div class="bg-light rounded h-100 p-4">
                        <h3 class="mb-4 text-primary">Update Gallery</h3>



                        <form method='POST' action="" enctype="multipart/form-data">

                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                <?php
                                if (isset($_POST['update'])) {
                                    echo $_SESSION['status'];
                                }
                                ?>

                            </div>
                            <input type="hidden" class="form-control" id="floatingInput" name="id" value="<?= $user->id; ?>">
                            <div class="form-floating mb-3">

                                <input type="text" class="form-control" id="floatingInput" placeholder="news title" name="title" value=" <?= $user->title; ?>">
                                <label for="floatingInput">Title</label>

                            </div>
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" placeholder="Attach file" name="file">
                                <input type="hidden" class="form-control" name="file_old" value="<?=$user->image; ?>">

                                <label>File</label>
                            </div>
                            <?php
                    // while($row = $query->fetch_assoc()){
       $imageURL = '../img/gallery/'.$user->image;
                    // }    
                            ?>
                     <div class="form-floating mb-3">
                        <img src="<?php echo $imageURL; ?>" width=250px  />
                    </div> 
                            
                            
                         

                            <button type="submit" name="update" class="btn btn-primary m-2">Update</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 " style="background-color: #f3f6f9;"></div>
            </div>

            <!-- Widgets Start -->

            <!-- Widgets End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Exodus</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <!-- Designed By <a href="://htmlcodex">Eugene</a> -->
                            </br>
                            Distributed By <a class="border-bottom" href="://themewagon" target="_blank">Exodus</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/chart/chart.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    C:\xampp\htdocs\Exo\js\bootstrap.min.js
    <!-- Template Javascript -->

    <script src="bootstrap.min.js"></script>
</body>

</html>