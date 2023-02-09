<?php
session_start();
include '../db/connection.php';
$id=$_GET['id'];
$request=$_GET['request'];

$query="UPDATE `bookinghotel` SET `request`=$request WHERE id=$id";

mysqli_query($connect,$query);

// echo $status
header('location:hotelBoked.php');
?>