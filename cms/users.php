<?php
include '../config.php';
include('inc/header.php');
$sql = "SELECT * FROM user_form";
$all_user = $conn->query($sql);
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
						<h3 class="panel-title" style="color: white;">Users</h3>
					</div>
					<div class="panel-body">
						<div class="panel-heading">
							<div class="row">
								<div class="col-md-10">
									<h3 class="panel-title"></h3>
								</div>
								<div class="col-md-2">
									<a href="add_user.php" class="btn btn-default btn-xs">Add New</a>				
								</div>
							</div>
						</div>
						<table class="table table-striped">
							<thead>
								<tr>	
									<th>ID</th>								
									<th>Username</th>									
									<th>Email</th>
									<th>Password</th>																																		
								</tr>								
							</thead>
							<tbody>
								<?php
									while ($row = mysqli_fetch_assoc($all_user)){
								?>											
									<?php
										echo "
											<tr>
												<td><div id='id'>".$row['id']."</div></td>
												<td><div id='username'>".$row['username']."</div></td>
												<td><div id='email'>".$row['email']."</div></td>
												<td><div id='password'>".$row['password']."</div></td>
												<td><button class='btn btn-primary'><a href='update_user.php?update=".$row['id']."' style='color:white; text-decoration:none;'>Update</a></button><td>												
												<td><button class='btn btn-danger'><a href='delete_user.php?delete=".$row['id']."' style='color:white; text-decoration:none;'>Delete</a><td>										
											</tr>
										";
									?>
								<?php			
										}
									
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</body>


 <?php include('inc/footer.php');?>
