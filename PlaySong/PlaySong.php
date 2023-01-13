<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel = "icon" href = 
    "https://img.freepik.com/free-vector/music-design-yellow-illustration_24877-49373.jpg?auto=format&h=200" 
          type = "image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_Play_song.css" />
    <title>Piano</title>
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
                        <li id="logOut"><a href="../index.php">Log Out</a></li> 
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
<h1>How to Play?</h1>
    <iframe src="https://www.youtube.com/embed/3gZC5763wYk?autoplay=1?" class="lesson-iframe" width="680" height="315"></iframe>
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
