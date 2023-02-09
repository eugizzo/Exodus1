<?php

include '../db/connection.php';
$id=$_GET['id'];

$query="DELETE fROM booking WHERE id=$id";
$delete= $conn->query($query);

if($delete){
    ?> 
	<script type="text/javascript">
		alert("now the request have been cancelled.");
		location.href='BookedDestination.php';
	</script>
	
	<?php   
}

?>