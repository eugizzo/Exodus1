<?php
// including the database connection file
include_once("db/connection.php");

if(isset($_POST['submit']))
{   
    $id=$_POST['id'];
    
    $name=$_POST['username'];
    $phone=$_POST['phone'];
    $email=$_POST['email']; 
    $password=$_POST['password']; 
    // checking empty fields
    if(empty($name) || empty($phone) || empty($email)) {          
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($phone)) {
            echo "<font color='red'>phone field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }       
    } else {    
        //updating the table
        $result = "update users set username='$name',phone='$phone',email='$email',password='$password' WHERE user_id='$id'";
        
        $run_update = mysqli_query($connect, $result );
        //redirectig to the display pphone. In our case, it is index.php

        if($run_update){
        // header("Location: index.php");
    }
}
}
?>