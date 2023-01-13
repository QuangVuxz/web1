<?php
	include '../config.php';
	session_start();  
	$user_id = $_SESSION['user_id'];
    $sql = mysqli_query($conn, "SELECT * FROM `admin_form` WHERE id = '$user_id'") or die('query failed');
    if (mysqli_num_rows($sql)>0){
      $data = mysqli_Fetch_assoc($sql);
    }
?>
<nav class="navbar navbar-default">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="#"></a>
	</div>
	<div id="navbar" class="collapse navbar-collapse">
	  <ul class="nav navbar-nav">
		<li class="active"><a href="admin.php">Dashboard</a></li>		
	  </ul>	  
	  <ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="#">Welcome, <?php echo $data['username'];?></a></li>
		<li><a href="logout.php">Logout</a></li>          
	  </ul>	  
	</div>
  </div>
</nav>
