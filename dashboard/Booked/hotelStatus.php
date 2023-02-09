<?php
session_start();
include '../db/connection.php';
$id=$_GET['id'];
$status=$_GET['status'];

$query="UPDATE `bookinghotel` SET `status`=$status WHERE id=$id";

mysqli_query($connect,$query);

// echo $status
header('location:BookedHotel.php');
?>