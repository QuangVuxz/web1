<?php
include '../config.php';
include('inc/header.php');
$id=$_GET['update'];
$sql=mysqli_query($conn,"SELECT * from `user_form` WHERE id=$id");
$row=mysqli_fetch_assoc($sql);
$username = $row['username'];
$email = $row['email'];
$password = $row['password'];
if(isset($_POST['submit'])){
    $username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $sql= mysqli_query($conn,"UPDATE `user_form` SET id=$id,username='$username',email='$email',password='$password' WHERE id=$id") or die('query failed');
    if($sql){
        // echo "Updated Successfully";
        header('location:users.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>
<link href="./css/cms.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php 
include "menus.php"; 
?>

<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard</h1>
			</div>
			<br>			
		</div>
	</div>
</header>
<br>

<section id="main">
	<div class="container">
		<div class="row">
			<?php include "left_menus.php"; ?>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading"style="background-color:  #095f59;">
						<h3 class="panel-title" style="color: white;">Update User</h3>
					</div>
					<div class="panel-body">
						<div class="panel-heading">
							<div class="row">
								<div class="col-md-10">
									<h3 class="panel-title"></h3>
								</div>								
							</div>
						</div>
						<form action="" method="post" enctype="multipart/form-data">
                        	<div class="form-group">
                                <label>Username</label>
                                <input name="username" type="text" class="form-control" id="InputUsername" placeholder="Username" value=<?php echo $username;?>>
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input name="email" type="text" class="form-control" id="InputEmail" placeholder="Email" value=<?php echo $email;?>>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="text" class="form-control" id="InputPassword" placeholder="Password" value=<?php echo $password;?>>
                            </div>                            
                            <button type="submit" name='submit' class="btn btn-primary">Update</button>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</body>


 <?php include('inc/footer.php');?>
