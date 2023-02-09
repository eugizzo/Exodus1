<?php

include '../db/connection.php';
$id=$_GET['id'];

$query="DELETE fROM feedback WHERE id=$id";
$delete= $conn->query($query);

if($delete){

	header('location:feedback.php');
}

?>