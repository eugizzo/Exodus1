<?php
 session_start();
 include '../db/connection.php';

try{

if(isset($_POST['email']) && isset($_POST['password'])){

$email=trim($_POST['email']);
$password=strip_tags(trim($_POST['password']));

$login="SELECT *FROM users WHERE email=? AND password=?";
$query=$conn->prepare($login);
$query->execute(array($email,$password));
$row=$query->fetch();
if ($row>0) {
	$_SESSION['email']=$email;
	header('location:../index.php');
}
else{

    ?> 
	<script type="text/javascript">
		alert("password and email not match  please try again !!");
		location.href='signin.php';
	</script>
	
	<?php 
}


}


}
catch(PDOExeption $e){
	echo "error".$e->getmessage();
}
?>





<form method="POST" action=" ">

   	<input type="text" name="email" placeholder="enter your first_name" class="form-control"><br>
   	 <input type="password" name="password" placeholder="enter your password" class="form-control"> <br>
   	 
   	<input type="submit" name="submit" value="Login">


   </form>