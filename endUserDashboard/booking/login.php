<?php
 session_start();
 include '../../dashboard/db/connection.php';

try{

if(isset($_POST['username']) && isset($_POST['password'])){

$username=trim($_POST['username']);
$password=strip_tags(trim($_POST['password']));

$login="SELECT *FROM users WHERE username=? AND password=?";
$query=$conn->prepare($login);
$query->execute(array($username,$password));

$row=$query->fetch();
$_SESSION['userType']=$row['userType'];
if ($row>0) {
	$_SESSION['email'] =$username;
	if ($_SESSION['userType']=='endUser'){

	?> 
	<script type="text/javascript">
		alert("Thank you <?php echo $username ?> !! , you can booking now ");
		location.href='../../BookingForm.php';
	</script>
	
	<?php 

}

}

}}
catch(PDOExeption $e){
	echo "error".$e->getmessage();
}
?>

