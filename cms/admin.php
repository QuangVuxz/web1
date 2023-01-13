<?php
    include '../config.php';
    include './inc/count.php';         
    include('inc/header.php');     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="./css/cms.css" rel="stylesheet" type="text/css" >     
</head>
<body>
<?php include "menus.php"; 
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
  header('location:login-admin.php');
}   
?>


<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Dashboard</h1>
			</div>      
			<br>
			<div class="col-md-2">
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Manage
					<span class="caret"></span></button>
					<ul class="dropdown-menu">						
						<li><a href="add_user.php">Add User</a></li>
						<li><a href="#">Add Excercises</a></li>
					</ul>
				</div> 
			</div>
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
  <div class="panel-heading" style="background-color:  #095f59;">
    <h3 class="panel-title" style="color: white;">Website Overview</h3>
  </div>
  <div class="panel-body" style="display: flex; justify-content:center;">
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-user" aria-hidden="true"><?php echo $num_user?></span></h2>
       <h4>Users</h4>
     </div>
   </div>
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"><?php echo $num_ex?></span></h2>
       <h4>Excercises</h4>
     </div>
   </div>      
  </div>
</div>


      </div>
    </div>
  </div>
</section>


 <?php include('inc/footer.php');?>
</html>