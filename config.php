<?php
$conn = mysqli_connect('localhost','root','','user_db') or die('connection failed');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }  
?>