<?php
include '../config.php';      
    session_start();
      
    if(isset($_POST['login'])){
      $username = $_POST['username'];        
      $password = $_POST['password'];        

      $select = mysqli_query($conn, "SELECT * FROM `admin_form` WHERE username='$username' AND password='$password'") or die('query failed');
      if(mysqli_num_rows($select)>0){
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header('location:admin.php');
      }else{
        $message[] = 'incorrect username or password!';
      }      
    }              
include('inc/header.php');
?>
<title>Admin</title>
<style>
  .message{
        color: white;
        justify-content: center;
      }
</style>
<div class="container" style="display: flex; justify-content:center; align-items:center;">	
	<div class="col-md-6">                    
		<div class="panel panel-info">
			<div class="panel-heading" style="background:#00796B;color:white;">
				<div class="panel-title">Admin Login</div>                        
			</div>
      <?php
        if(isset($message)){
          foreach($message as $message){
            echo '<div class="message">'.$message.'<div>';
          }
        }
      ?>
			<div style="padding-top:30px" class="panel-body" >				
				<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="username" name="username" placeholder="username" style="background:white;" required>                                        
					</div>                                
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="password" name="password"placeholder="password" required>
					</div>
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="Login" class="btn btn-info">						  
						</div>						
					</div>	
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						Username: admin<br>
						password: admin		  
						</div>						
					</div>	
				</form>   
			</div>                     
		</div>  
	</div>
</div>	
<?php include('inc/footer.php');?>