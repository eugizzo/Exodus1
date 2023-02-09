<?php

    if(isset($_POST['update'])){

		include '../db/connection.php';

    $id=$_POST['id'];
   		$title=$_POST['title'];
		$time=$_POST['time'];
		$near=$_POST['nearby'];
		$location=$_POST['location'];
		$price=$_POST['price'];

    $c_image= $_FILES['file']['name'];
	$old_image= $_POST['file_old'];
    $c_image_temp=$_FILES['file']['tmp_name'];

if($c_image !=''){
	$update_c_image=$c_image;
}
else{
	$update_c_image=$old_image;
}

if(!file_exists('../img/dest/'.$c_image)){
	$filename= $_FILES['file']['name'];
	$_SESSION['status']='image already Exist'.$filename;
	header('Location:edit.php');
}
else{
	$c_update="update destination set title='$title', file_name='$update_c_image', location='$location', time= '$time', price='$price', near= '$near'
	where id='$id'";

$run_update=mysqli_query($connect, $c_update);
if($run_update){

     if($c_image !=''){
		move_uploaded_file($c_image_temp , "../img/dest/$c_image");
		unlink('../img/dest/'.$old_image);
	 }
	
	$_SESSION['status']='Destination update successful';
	header('Location:destList.php');

}
else{
	$_SESSION['status']='Destination Not updated';
	header('Location:destList.php');
}

}
  
  }
?>