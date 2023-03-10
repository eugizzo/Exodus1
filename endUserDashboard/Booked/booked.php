<?php
session_start();
include '../db/connection.php';

if (!isset($_SESSION['email'])) {

    header('location:../signup_page.php');
}

$emails = $_SESSION['email'];
// echo $emails;
$retrieve = "SELECT * FROM booking WHERE email='$emails'";
$query = $conn->query($retrieve);
// $query->execute();
$feching = $query->fetchAll(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Exodus </title>
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


<style>
    .status-btn {
        border: none;
        color: white;
        padding: 5px 10px;
        width: 100px;
        cursor: pointer;
        box-shadow: 0px 0px 15px skyblue;
    }

    .Pending {
        background-color: green;
    }

    .Approved {
        background-color: blue;
    }
</style>
<!-- table -->
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">


<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">Exodus </h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php echo $_SESSION['userimage3'];?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['email']; ?></h6>
                        <span>User</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="../index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2 text-primary"></i>Dashboard</a>
                    
                    <!-- <a href="../users/userList.php" class="nav-item nav-link "><i class="fa fa-user-circle me-2 text-primary"></i>Profile</a> -->
                    <a href="#" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2 text-primary"></i>Booked dest</a>

                    <a href="hotelBoked.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2 text-primary"></i>Booked Hotel</a>
                    <a href="../index.php#destination" class="nav-item nav-link "><img src="backHome.jpg" style="width:40px;">Back Home to <span style="padding-left:40px;">booking</span></a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content bg-light">
            <!-- Navbar Start -->
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
                            <img class="rounded-circle me-lg-2" src="<?php echo $_SESSION['userimage3'];?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['email']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="../../dashboard/login/signout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <div>
                <div class="col-sm-1"></div>
                <div class="col-sm-10 " style="padding-top: 15px;">
                    <div class="bg-light rounded h-100 p-3">
                        <h3 class="mb-4" style="padding-top: 15px;"><i>My Boocked destination</i></h3>
                        <div class="table-responsive">
                            <table class="table text-start align-middle table-bordered table-hover mb-0 " id="example">
                                <thead>
                                    <tr class="bg-primary text-white">
                                        <th class="text-primary">#</th>


                                        <th scope="col-1" class="col-sm-2">Title/Location</th>
                                        <!-- <th scope="col" class="text-primary">Location</th> -->

                                        <th scope="col-2" class="col-sm-2">Names</th>
                                        <!-- <th scope="col" class="text-primary col-sm-1">Email</th> -->
                                        <th scope="col-2" class="col-sm-1">Number</th>
                                        <th scope="col-2" class="col-sm-1">phone number</th>
                                        <th scope="col-2" class="col-sm-1">date</th>
                                        <th scope="col-2" class="col-sm-1">status</th>
                                        <th scope="col-1" class="col-sm-1">request</th>
                                    </tr>
                                </thead>

                                    <tbody>
                                    <?php
                                $i = 0;
                                foreach ($feching as $key => $destination) {
                                    $i++;
                                ?>
                                        <tr>

                                            <th scope="row"><?php echo $i ?></th>
                                            <td><?= $destination->title; ?>/<?= $destination->location; ?></td>
                                            <!-- <td><?= $destination->location; ?></td> -->
                                            <td><?= $destination->name; ?></td>
                                            <!-- <td><?= $destination->email; ?></td> -->
                                            <td><?= $destination->number; ?></td>
                                            <td><?= $destination->phone; ?></td>
                                            <td><?= $destination->date; ?></td>
                                            <td>
                                                <?php
                                                if ($destination->status == 1) {
                                                    echo '<button class="btn btn-success">Approved</button>';
                                                } 
                                                elseif ($destination->request == 2) {
                                                    echo '  ________ ';
                                                }
                                                else {
                                                    echo '<button class="btn btn-primary">Pending</button>';
                                                }


                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($destination->status == 0) {
                                                    if ($destination->request == 0) {
                                                        echo '<button class="btn btn-warning" type="submit" name="Approved" id="statusBtn"><a class="text-white" href="status.php?id=' . $destination->id . '&request=2">Cancel</button>';
                                                    } else {
                                                        echo '<button class="btn btn-danger " type="submit" name="Approved" id="statusBtn"><a class="text-white" href="status.php?id=' . $destination->id . '&request=0">Cancelled</button>';
                                                    }
                                                } else {
                                                    echo '  ________ ';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>
    <!-- Widgets Start -->

    <!-- Widgets End -->


    <!-- Footer Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded-top p-4">
            <div class="row">

                <div class="col-12 col-sm-6 text-center text-sm-end">
                    <!--/*** This template is free as long as you keep the footer author???s credit link/attribution link/backlink. If you'd like to use the template without the footer author???s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->

                    </br>
                    Distributed By <a class="border-bottom" href="#" target="_blank">EXODUS
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

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
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
