<?php
    include '../config.php';
    $count_user = mysqli_query($conn,"SELECT id from `user_form` ORDER BY id");      
    $num_user = mysqli_num_rows($count_user);
    $count_ex = mysqli_query($conn,"SELECT lesson_id from `lesson_db` ORDER BY lesson_id");
    $num_ex = mysqli_num_rows($count_ex);
?>