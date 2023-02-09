<?php
include 'dashboard/db/connection.php';

    $message='';
    $id='';
	$name=$_POST["name"];
	$email=$_POST["email"];
	$subject=$_POST["subject"];
	$message=$_POST["message"];
	$files=$_FILES['file']['tmp_name'];
$filename=$_FILES['file']['name'];
$path='endUserDashboard/profiles/'.$filename;
$fileType = pathinfo($path,PATHINFO_EXTENSION);
$allowTypes = array('jpg','png','jpeg','gif','jfif');

if(in_array($fileType, $allowTypes)){

      // Upload file to server
if (move_uploaded_file($files,$path )) {

	// if(isset($_POST["submit"]) && !empty($_POST["subject"]) && !empty($_POST["message"]) && !empty($_POST["name"])&& !empty($_POST["email"])){
	$insert="INSERT INTO `feedback`(`name`, `email`, `comment`, `subject`, `date`,`profile`) VALUES (?,?,?,?,?,?)";
	$query=$conn->prepare($insert);
	
	
	$query->execute(array($name,$email,$message,$subject,date('Y-m-d H:i:s'),$filename));
	if ($query) {
		$message="Your comment have been sent";
        $_SESSION['message']=$message;
	?> 
	<script type="text/javascript">
		alert("Your comment have been sent");
		location.href='index.php#testimony-section';
	</script>
	
	<?php  
	
	}
	 else {
			echo "data not inserted";
	}
}}
// 	}
// 	else {
// 		echo "please fill all data";
// }

   
   ?>

	
	
	 