<?php
include("../../db/connection.php");
if(isset($_POST['id'])){
    $updateId = $_POST['id'];
    updateStatus($conn, $updateId);
}

function updateStatus($conn, $updateId){

    $getStatus= getStatus($conn, $updateId);
    if(!empty($getStatus)){

        if($getStatus['status']==0){
            $sql = "UPDATE booking SET status=1 WHERE id=$updateId";
            
        if ($conn->query($sql) === TRUE) {
             echo 1;
          } 
        }elseif($getStatus['status']==1){
           $sql = "UPDATE booking SET status=0 WHERE id=$updateId";
           
        if ($conn->query($sql) === TRUE) {
            echo 0;
          } 
        }
       

    }else{
        echo "No data is exist in database";
    }

}

function getStatus($conn, $id){

    $query= "SELECT status FROM booking WHERE id=$id";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
    }else{
       $row =[];
    }
    return $row;

}
?>