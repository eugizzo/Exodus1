<?php
session_start();

include 'db/connection.php';


if (!isset($_SESSION['email'])) {

    header('location:../signup_page.php');
}



$retrieve = "SELECT * FROM users";
$query = $conn->query($retrieve);
// $query->execute();
$feching = $query->fetchAll(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Exodus Tour and Travery Agency</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">
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
        <div class="sidebar pe-4 pb-3 ">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">Exodus</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php echo $_SESSION['adminImage'];?> " alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['username']; ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="#" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2 text-primary"></i>Dashboard</a>

                    <div class="nav-item dropdown">
                        <a href="destination/destination.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-calendar me-2 text-primary"></i>Destination</a>
                        <div class="dropdown-menu bg-transparent border-0" style="padding-left: 30px;">
                            <a href="destination/destination.php" class="dropdown-item "><i class="fa fa-plus-circle me-2 text-primary"></i>Add Destination</a>
                            <a href="destination/destList.php" class="dropdown-item "><i class="fa fa-file me-2 text-primary"></i>destination List</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-circle me-2 text-primary"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0" style="padding-left: 15px;">
                            <a href="adduser/adduser.php" class="nav-item nav-link"><i class="fa fa-plus-circle me-2 text-primary"></i> Add Users</a>
                            <a href="adduser/listuser.php" class="dropdown-item"><i class="fa fa-file me-2 text-primary"></i>UserList</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-image me-2 text-primary"></i>Gallery</a>
                        <div class="dropdown-menu bg-transparent border-0" style="padding-left: 30px;">
                            <a href="gallery/insertGallery.php" class="nav-item nav-link "><i class="fa fa-plus-circle me-2 text-primary"></i> Add Gallery</a>
                            <a href="gallery/listOfGallery.php" class="dropdown-item"><i class="fa fa-file me-2 text-primary"></i>Gallery list</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fa fa-laptop me-2 text-primary"></i>Hotel</a>
                        <div class="dropdown-menu bg-transparent border-0" style="padding-left: 30px;">
                            <a href="hotels/hotelPages.php" class="dropdown-item "><i class="fa fa-plus-circle me-2 text-primary"></i>Add Hotel </a>
                            <a href="hotels/hotelList.php" class="dropdown-item"><i class="fa fa-file me-2 text-primary"></i>Hotel list</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2 text-primary"></i>Blog</a>
                        <div class="dropdown-menu bg-transparent border-0 " style="padding-left: 30px;">
                            <a href="blog/BlogPage.php" class="dropdown-item  "><i class="fa fa-plus-circle me-2 text-primary "></i>Add Blog </a>
                            <a href="blog/BlogList.php" class="dropdown-item"><i class="fa fa-file me-2 text-primary"></i>Blog list</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fa fa-laptop me-2 text-primary"></i>View booking</a>
                        <div class="dropdown-menu bg-transparent border-0" style="padding-left: 30px;">
                            <a href="Booked/BookedDestination.php" class="dropdown-item "><i class="fa fa-plus-circle me-2 text-primary"></i>Tour Booking </a>
                            <a href="Booked/BookedHotel.php" class="dropdown-item"><i class="fa fa-file me-2 text-primary"></i>Hotel Booking</a>

                        </div>
                    </div>
                    <a href="feedback/feedback.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2 text-primary"></i>feedback</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-2 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4 bg-danger">
                    <input class="form-control border-0 text-danger" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?php echo $_SESSION['adminImage'];?> "alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['email']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="profile/profile.php" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="login/signout.php" class="dropdown-item">Log Out</a>

                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->

            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->


            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Destination</p>
                                <?php
                                $query = $connect->query("SELECT * FROM destination");



                                ?>
                                <h4 class="mb-0 text-primary"><?= $query->num_rows; ?></h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Hotels </p>
                                <?php
                                $query = $connect->query("SELECT * FROM hotels");

                                ?>
                                <h4 class="mb-0 text-primary"><?= $query->num_rows; ?></h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Booking</p>
                                <?php
                                $query = $connect->query("SELECT * FROM booking");

                                ?>
                                <h4 class="mb-0 text-primary"><?= $query->num_rows; ?></h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total users</p>
                                <?php
                                $query = $connect->query("SELECT * FROM users");

                                ?>
                                <h4 class="mb-0 text-primary"><?= $query->num_rows; ?></h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent users logged in</h6>
                        <a href="adduser/adduser.php"><i class="fa fa-plus-circle me-2 text-primary"></i>Add Admin</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0 " id="example">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th scope="col">#</th>
                                    <th scope="col">UserName</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Phone</th>

                                    <th scope="col">action</th>
                                </tr>
                            </thead>

                                <tbody>
                                <?php
                            $i = 0;
                            foreach ($feching as $key => $user) {
                                $i++;
                            ?>
                                    <tr>
                                        <th scope="row"><?php echo $i ?></th>
                                        <td><?= $user->username; ?></td>

                                        <td><?= $user->email; ?></td>
                                        <td><?= $user->userType; ?></td>
                                        <td><?= $user->phone; ?></td>
                                        <td>

                                            <a href="edit.php?id=<?= $user->user_id; ?>" style="padding-right: 10px; color:green"><button class="btn btn-success">edit</button></a>
                                            <a href="delete.php?id=<?= $user->user_id; ?>" onclick="return confirm('Are you sure you want to delete this file with its details permanently? click Ok to continue or click Cancel')"><button class="btn btn-danger">delete</button></a>
                                        </td>
                                    </tr>

                                    <?php } ?>
                                </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            <!-- Widgets Start -->

            <!-- Widgets End -->

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Exodus.rw</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">

                            Designed By <a href="#">Exodus Tour and Travel agency</a>
                            </br>

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
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>
</head>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>


<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable();
} );
</script>
