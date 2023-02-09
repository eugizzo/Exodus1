<?php

include '../db/connection.php';

$id=$_GET['id'];

$query="DELETE FROM `users` WHERE  user_id=$id";
$delete= $connect->query($query);
if($delete){
    ?> 
	<script type="text/javascript">
		alert("user deleted");
		location.href='listUser.php';
	</script>
	
	<?php 
}

?>