<?php
include 'dashboard/db/connection.php';


	$user_name=$_POST["username"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$phone=$_POST["phone"];
	$pass=sha1($password);
	$userType='endUser';
	$status='endUser';
	$Location=$_POST['Location'];;
	// if(isset($_POST["submit"]) && !empty($_POST["username"])&& !empty($_POST["email"]) && !empty($_POST["phone"])&& !empty($_POST["password"])){
	// $insert="INSERT INTO users( username, email, phone, password) VALUES (?,?,?,?)";
    $insert="INSERT INTO `users`(`username`, `email`, `phone`,`Location`, `password`,`userType`) VALUES (?,?,?,?,?,?)";
	$query=$conn->prepare($insert);
	
	
	$query->execute(array($user_name,$email,$phone,$Location,$password,$userType));
	if ($query) {
		$message="data inserted Successfully"
	?> 
	<script type="text/javascript">
		alert("Registration Done Successfully");
		location.href='signup_page.php';
	</script>
	
	<?php  
	
	}
	 else {
			echo "data not inserted";
	}

	// }
	// else {
	// 	?> 
	// <script type="text/javascript">
	// 	alert("please fill all data");
	// 	location.href='signup_page.php';
	// </script>
	
	<?php 
// }

	// $result=$conn->query($insert);
	//  if ($result) {
	// 	 echo "user have been registed";
	//  }
	//  else{
	// 	 echo "not";
	//  }
//    }

// echo 'your username is: '.$user_name.'  '.$email.'  '.$password.'  '.$pass;
   
   ?>
