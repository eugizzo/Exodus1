<?php
session_start();
include '../db/connection.php';
$id=$_GET['id'];
$request=$_GET['request'];

$query="UPDATE `booking` SET `request`=$request WHERE id=$id";

mysqli_query($connect,$query);

// echo $status
header('location:booked.php');
?>