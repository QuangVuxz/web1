<?php
      include 'config.php';
      session_start();
      
      if(isset($_POST['submit'])){
        $username = $_POST['username'];        
        $password = $_POST['password'];        

        $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE username='$username' AND password='$password'") or die('query failed');
        if(mysqli_num_rows($select)>0){
          $row = mysqli_fetch_assoc($select);
          $_SESSION['user_id'] = $row['id'];
          header('location:./Playsong/PlaySong.php');
        }else{
          $message[] = 'incorrect username or password!';
        }      
      }                         
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>    
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel = "icon" href = 
  "https://img.freepik.com/free-vector/music-design-yellow-illustration_24877-49373.jpg?auto=format&h=200" 
          type = "image/x-icon">
    <link rel="stylesheet" href="./css/style.css" />
    <style>
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        font-family: Arial, sans-serif;
      }
      
      li {
        float: right;
      }
      
      li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }
      
      li.current a, li a:hover, li a:active, li a:focus {
        background-color: #111;
        color:red;
      }
      h1 {
        font-size: 3em;
        text-align: center;
        margin: 1em 0;
        color: white;
      }
      
      p {
        font-size: 1.5em;
        line-height: 1.5;
        margin: 0.5em 0;
        color: white;
      }
      .message{
        color: white;
        justify-content: center;
      }
    </style>    
  </head>
  <body>  
    <nav>
      <ul>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php" style="color:red">Login</a></li>
        <li><a href="index.php">Home</a></li>
      </ul>
    </nav>
    </div>
    <div class="login-box">
      <h2>Login</h2>
      <?php
        if(isset($message)){
          foreach($message as $message){
            echo '<div class="message">'.$message.'<div>';
          }
        }
      ?>
      <form accept="" method="post" enctype="multipart/form-data" >
        <div class="user-box">
          <input id="username" type="text" name="username" placeholder="Username" required=""/>
        </div>
        <div class="user-box">
          <input id="password" type="password" name="password" placeholder="Password" required=""/>
        </div>
        <div class="button-form">
          <input type="submit" name="submit" id="submit" value="Login">          
          <div id="register">
            Don't have an account?
            <a id="btn-register" href="register.php">Register</a>
          </div>
        </div>
      </form>
    </div>
    <script src="../models/User.js"></script>
    <script src="login_script.js"></script>
  </body>
</html>
