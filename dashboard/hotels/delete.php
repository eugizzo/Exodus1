<?php

include '../db/connection.php';
$id=$_GET['id'];

$query="DELETE fROM hotels WHERE id=$id";
$delete= $conn->query($query);

if($delete){
    ?> 
	<script type="text/javascript">
		alert(" deleted successfully.");
		location.href='hotelList.php';
	</script>
	
	<?php   
}
?>