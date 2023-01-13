<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = 
    "https://img.freepik.com/free-vector/music-design-yellow-illustration_24877-49373.jpg?auto=format&h=200" 
          type = "image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Search</title>
    <style>
        body {
            height: 100vh;
            background: #9568e4;
        }
        /* Style the search bar */
        form {
            /* Add some padding and a border */          
            /* Use flexbox to center the search bar within the form element */
            display: flex;
            justify-content: center;
        }        
        input[type="text"] {
            /* Give the search bar some padding and a border */
            padding: 10px;
            border: 1px solid #ccc;
            /* Make the search bar wider */
            width: 50%;
            /* Add some rounded corners */
            border-radius: 10px;
            margin-right: 10px;
        }
    </style>
    <?php
        include 'config.php';
        session_start();
        $user_id = $_SESSION['user_id'];

        if(!isset($user_id)){
            header('location:login.php');
        };
        
        if(isset($_GET['logout'])){
            unset($user_id);
            session_destroy();
            header('location:index.php');
        }  
    ?>
</head>
<body>
    <!--Navbar-->
    <div class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">  
                  <div class="navbar-header">
                      <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                      <a href="PlaySong\PlaySong.php" class="navbar-brand">PIANO</a>
                      
                  </div>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="exercises.php">Exercises</a></li>
                        <li id="search_data"><a href="search.php">Search</a></li>
                        <li id="profile"><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li id="logOut"><a href="./index.php?logout=<?php echo $user_id;?>">Logout</a></li> 
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
<!--Search bar-->
<div class="search">
    <!-- Create a form element to hold the search bar -->
    <form>
        <!-- Use an input element with type "text" to create the search bar -->
        <input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Search lesson here...">
    </form>
</div>
<div id="result"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#live_search").keyup(function(){
            var input = $(this).val();            
            if(input !=""){
                $.ajax({
                    url:"search_data.php",
                    method: "POST",
                    data:{input:input},

                    success:function(data){
                        $("#result").html(data);
                        $("#result").css("display","block");                        
                    }
                });
            }else{
                $("#result").css("display","none");
            }
        });
    });
</script>
</body>
</html>