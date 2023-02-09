
<?php 
include '../db/connection.php';
$user_name=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$pass=sha1($password);
$userType="Admin";
$files=$_FILES['file']['tmp_name'];
$filename=$_FILES['file']['name'];
$path='../img/profile/'.$filename;
$fileType = pathinfo($path,PATHINFO_EXTENSION);
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){

// Allow certain file formats
$allowTypes = array('jpg','png','jpeg','gif','jfif');

if(in_array($fileType, $allowTypes)){

      // Upload file to server
if (move_uploaded_file($files,$path )) {

    // Insert image file name into database
$savefile=$conn->prepare("INSERT INTO `users`(`username`, `email`, `phone`, `password`, `userType`, `profile`) VALUES(?,?,?,?,?,?)");
$RESULT=$savefile->execute(array($user_name,$email,$phone,$password,$userType,$filename));
if($RESULT){
    // $statusMsg = "The file ".$filename. " has been uploaded successfully.";

    ?> 
	<script type="text/javascript">
		alert("The user:  <?=$user_name; ?> added successfully.");
		location.href='listuser.php';
	</script>
	
	<?php 
}else{



    ?> 
	<script type="text/javascript">
		alert("The user:  <?=$user_name; ?> image upload failed, please try again..");
		location.href='adduser.php';
	</script>
	
	<?php 
} 
}else{

    ?> 
	<script type="text/javascript">
		alert("The user:  <?=$user_name; ?> Sorry, there was an error uploading your image.");
		location.href='adduser.php';
	</script>
	
	<?php 
}
}else{

    ?> 
	<script type="text/javascript">
		alert("The user:  <?=$user_name; ?> Sorry, only JPG, JPEG, PNG, GIF, images are allowed to upload.");
		location.href='adduser.php';
	</script>
	
	<?php 
}
}else{

    ?> 
	<script type="text/javascript">
		alert("The user:  <?=$user_name; ?> Please select a profile to upload.");
		location.href='adduser.php';
	</script>
	
	<?php 

}

// // Display status message
// echo $statusMsg;

	
	
	 