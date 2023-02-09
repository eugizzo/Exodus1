<?php

include '../db/connection.php';
$id=$_GET['id'];

$query="DELETE fROM blog WHERE id=$id";
$delete= $conn->query($query);

if($delete){
    ?> 
	<script type="text/javascript">
		alert(" deleted successfully.");
		location.href='BlogList.php';
	</script>
	w
	<?php   
}
?>