<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = 
    "https://img.freepik.com/free-vector/music-design-yellow-illustration_24877-49373.jpg?auto=format&h=200" 
          type = "image/x-icon">
    <link rel="stylesheet" href="style_Play_song.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      background: #9568e4;
      height: 100vh;
    }

    .piano-container {
      display: flex;
      margin: 0 auto;
      position: relative;
      padding: 1rem;
      margin-top: 2rem;
      margin-left: 13rem;
      justify-self: center;
    }
    .lesson-iframe{
      display: flex;
      border: 10px solid #000634;
      position: relative;
      margin-top: 2rem;
      justify-self: center;
    }
    .key {
      width: 4rem;
      height: 13rem;
      border-radius: 0 0 4px 4px;
      box-shadow: 2px 2px 10px 0px #ccc;
      display: flex;
      align-items: flex-end;
      justify-content: center;
      cursor: pointer;
    }

    .white-key {
      border: 3px solid #010425;
      background-color: #fff;
      transition: 0.2s all;
    }

    .white-active,
    .white-key:hover {
      background-color: rgba(81, 182, 178);
      border-bottom: none;
      transform: rotate3d(1, 0, 0, 20deg);
    }

    .black-key {
      background: rgb(36, 32, 30);
      z-index: 1;
      background: linear-gradient(
        180deg,
        rgba(36, 32, 30, 1) 26%,
        rgba(79, 82, 71, 1) 86%
      );
      height: 7rem;
      width: 1.5rem;
      position: absolute;
      top: 20px;
      transition: 0.2s all;
    }

    .black-1 {
      left: 44px;
    }

    .black-2 {
      left: 84px;
    }

    .black-3 {
      left: 164px;
    }

    .black-4 {
      left: 204px;
    }
    .black-5 {
      left: 244px;
    }

    .black-6 {
      left: 324px;
    }
    .black-7 {
      left: 365px;
    }

    .black-8 {
      left: 444px;
    }

    .black-9 {
      left: 484px;
    }

    .black-10 {
      left: 524px;
    }
    .black-11 {
      left: 604px;
    }

    .black-12 {
      left: 644px;
    }

    .black-13 {
      left: 724px;
    }

    .black-14 {
      left: 764px;
    }

    .black-15 {
      left: 804px;
    }

    .black-key:hover, .black-active{
      background: linear-gradient(
        180deg,
        rgba(36, 32, 30, 1) 26%,
        rgba(136, 173, 33) 86%
      );
      transform: translateY(20px);
    }
    .tutorial-white-key{
      display: inline-block;
      margin-left: 3rem;
    }
    .tutorial-black-key{
      display: inline-block;
    }
    </style>
    <?php
    
    $conn = mysqli_connect('localhost','root','','user_db') or die('connection failed');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $songId= $_GET['id'];        
    $sql = "SELECT * FROM lesson_db WHERE lesson_id = $songId";
    $result = mysqli_query($conn, $sql);
    $song = mysqli_fetch_assoc($result);
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
    <title>Play</title>
</head>
<body>  
  <!--Navbar-->
  <div class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">  
                  <div class="navbar-header">
                      <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                      <a href="PlaySong.php" class="navbar-brand">PIANO</a>
                      
                  </div>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="../exercises.php">Exercises</a></li>
                        <li id="search_data"><a href="../search.php">Search</a></li>
                        <li id="profile"><a href="../profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li id="logOut"><a href="../index.php?logout=<?php echo $user_id;?>">Logout</a></li> 
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
    
    <!--Main container-->
<!-- Create a container element to hold the page content -->
<div class="container">
<!-- Add a heading for the page -->
  <div class="content" style="display: flex; flex-direction:column;font-size: 40px;text-align:center;">
        <?php
        echo $song['lesson_name'];
        echo '<iframe width="600" height="315" src="'.$song['lesson_url'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
        ?>
    </div>
    <div class="piano-container">  
      <!-- White-keys -->
      <div class="white-key key" id="one">C</div>
      <div class="white-key key" id="two">D</div>
      <div class="white-key key" id="three">E</div>
      <div class="white-key key" id="four">F</div>
      <div class="white-key key" id="five">G</div>
      <div class="white-key key" id="six">A</div>
      <div class="white-key key" id="seven">B</div>
      <div class="white-key key" id="eight">C</div>
      <div class="white-key key" id="nine">D</div>
      <div class="white-key key" id="ten">E</div>
      <div class="white-key key" id="eleven">F</div>
      <div class="white-key key" id="twelve">G</div>
      <div class="white-key key" id="thirteen">A</div>
      <div class="white-key key" id="fourteen">B</div>
      <div class="white-key key" id="fifteen">C</div>
      <div class="white-key key" id="sixteen">D</div>
      <div class="white-key key" id="seventeen">E</div>
      <div class="white-key key" id="eighteen">F</div>
      <div class="white-key key" id="nineteen">G</div>
      <div class="white-key key" id="twenty">A</div>
      <div class="white-key key" id="twentyone">B</div>          
      

      <!-- Black keys -->
      <div class="black-key key black-1"  id="b1"></div>
      <div class="black-key key black-2"  id="b2"></div>
      <div class="black-key key black-3"  id="b3"></div>
      <div class="black-key key black-4"  id="b4"></div>
      <div class="black-key key black-5"  id="b5"></div>
      <div class="black-key key black-6"  id="b6"></div>
      <div class="black-key key black-7"  id="b7"></div>
      <div class="black-key key black-8"  id="b8"></div>
      <div class="black-key key black-9"  id="b9"></div>
      <div class="black-key key black-10" id="b10"></div>
      <div class="black-key key black-11" id="b11"></div>      
      <div class="black-key key black-12" id="b12"></div>
      <div class="black-key key black-13" id="b13"></div> 
      <div class="black-key key black-14" id="b14"></div>
      <div class="black-key key black-15" id="b15"></div>               
    </div>
  </div>
  <div class="tutorial-white-key">
    <h1>How to use this piano?</h1>
    <h2>1: You can play that key by your mouse via click on these key.</h2>
    <h2>2: You can play that key by your keyboard. The order (from left to right) are: </h2>
    <h3>White-keys:</h3>
    <ul>
      <ol>C -> a (on keyboard)</ol>
      <ol>D -> s (on keyboard)</ol>
      <ol>E -> d (on keyboard)</ol>
      <ol>F -> f (on keyboard)</ol>
      <ol>G -> g (on keyboard)</ol>
      <ol>A -> h (on keyboard)</ol>
      <ol>B -> j (on keyboard)</ol>
      <ol>C -> k (on keyboard)</ol>
      <ol>D -> l (on keyboard)</ol>
      <ol>E -> ; (on keyboard)</ol>
      <ol>F -> ' (on keyboard)</ol>
      <ol>G -> z (on keyboard)</ol>
      <ol>A -> x (on keyboard)</ol>
      <ol>B -> c (on keyboard)</ol>
      <ol>C -> v (on keyboard)</ol>
      <ol>D -> b (on keyboard)</ol>
      <ol>E -> n (on keyboard)</ol>
      <ol>F -> m (on keyboard)</ol>
      <ol>G -> , (on keyboard)</ol>
      <ol>A -> . (on keyboard)</ol>
      <ol>B -> ? (on keyboard)</ol>
    </ul>
  </div>
  <div class="tutorial-black-key">
    <h3>Black-keys:</h3>
    <ul>
      <ol>1st key -> q (on keyboard)</ol>
      <ol>2nd key -> w (on keyboard)</ol>
      <ol>3rd key -> e (on keyboard)</ol>
      <ol>4th key -> r (on keyboard)</ol>
      <ol>5th key -> t (on keyboard)</ol>
      <ol>6th key -> y (on keyboard)</ol>
      <ol>7th key -> u (on keyboard)</ol>
      <ol>8th key -> i (on keyboard)</ol>
      <ol>9th key -> o (on keyboard)</ol>
      <ol>10th key -> p (on keyboard)</ol>
      <ol>11th key -> [ (on keyboard)</ol>
      <ol>12th key -> ] (on keyboard)</ol>
      <ol>13th key -> 1 (on keyboard)</ol>
      <ol>14th key -> 2 (on keyboard)</ol>
      <ol>15th key -> 3 (on keyboard)</ol>
    </ul>
  </div>
    
  </div>  
    
    <script src="main_Play_song.js"></script>
</body>
</html>