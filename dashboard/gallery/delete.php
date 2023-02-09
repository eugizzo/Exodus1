<?php

include '../db/connection.php';
$id=$_GET['id'];

$query="DELETE fROM gallery WHERE id=$id";
$delete= $conn->query($query);

if($delete){

	header('location:listOfGallery.php');
}

?>