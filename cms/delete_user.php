<?php
    include '../config.php';
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $sql= mysqli_query($conn,"DELETE from `user_form` WHERE id='$id'");
        if($sql){
            // echo "Deleted Successfully";
            header('location:users.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>