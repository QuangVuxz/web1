<?php
        include 'config.php'; 
        session_start();       
        $user_id = $_SESSION['user_id'];
        

        if(!isset($user_id)){
            header('location:login.php');
        };
        
        if(isset($_GET['logout'])){ 
            session_destroy();       
            unset($user_id);           
            header('location:index.php');
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = 
    "https://img.freepik.com/free-vector/music-design-yellow-illustration_24877-49373.jpg?auto=format&h=200" 
          type = "image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Profile</title>    
</head>
<body>
    <div class="profile">        
        <div class="container-fluid">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row d-flex flex-column gy-5">
                    <div class="col">
                        <?php
                            $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
                            if (mysqli_num_rows($select)>0){
                                $fetch = mysqli_Fetch_assoc($select);
                            }
                            if($fetch['image']==''){
                                echo '<img style = "height: 150px; width: 150px; border-radius: 50%; object-fit: cover;" src = "images/default-avatar.png">';
                            }else{
                                echo '<img style = "height: 150px; width: 150px; border-radius: 50%; object-fit: cover;" src="uploaded_img/'.$fetch['image'].'">';
                            }
                        ?>
                    </div>                    
                    <div class="col"><h3><?php echo $fetch['username'];?></h3></div>
                    <div class="col"><a href="update_profile.php">Update Profile</a></div>
                    <div class="col"><a href="index.php?logout=<?php echo $user_id;?>">Logout</a></div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>