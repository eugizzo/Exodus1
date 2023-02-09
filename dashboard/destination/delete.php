<?php

include '../db/connection.php';
$id=$_GET['id'];

$query="DELETE fROM destination WHERE id=$id";
$delete= $conn->query($query);

if($delete){

	header('location:destList.php');
}

?>