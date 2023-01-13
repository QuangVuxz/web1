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
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family:Cambria, Cochin, Georgia;
    color: black;
}
  
body {    
    height: 100vh;
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

main{
    max-width: 1500px;
    width: 95%;
    margin:30px auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: auto;
}

main .music_card{
    max-width: 400px;
    flex: 1 1 210px;
    text-align: center;    
    border: 1px solid lightgray;
    margin: 20px;
}

main .music_card .image{
    height:50%;
    margin-bottom:20px;
}

main .music_card .image img{
    width: 100%;
    height:100%;
    object-fit: cover;
}
main .music_card .caption{
    font-weight:bold;
    padding-left: 1em;
    text-align: left;
    line-height: 3em;
    height: 25%;
}

main .music_card .caption p{
    font-size:1.5rem;
}

main .music_card .caption .rate{
    display:flex;
}

main .music_card button a{
    width:50%;
    text-decoration: none;
    color: black;    
}

main .music_card button{
    border: 2px solid black;
    padding: 1em;
    width: 80%;
    cursor: pointer;
    margin-top: 2em;
    font-weight: bold;
    position: relative;
    border-radius: 15px;
}

main .music_card button:hover{    
    background: orange;
}
main .music_card .image img{
    border-radius: 15px 15px 0 0;
    }
main .music_card{
    border-radius: 15px;
}
    </style>
    <title>Piano</title>
  </head>
  <body>
    <main>
    <?php
    $conn = mysqli_connect('localhost','root','','user_db') or die('connection failed');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_POST['input'])){
        $input = $_POST['input'];
        $query = "SELECT * from lesson_db WHERE lesson_name LIKE '%{$input}%'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)>0){?>
            <?php
                while($row=mysqli_fetch_assoc($result)){                    

                    ?>
                <div class="music_card">
                    <div class="image">
                        <img src="<?php echo $row["lesson_img"]; ?>" alt="">
                    </div>
                    <div class="caption">
                        <p class="rate">Level: Beginner</p>
                        <p class="song_name">Song name: <?php echo $row["lesson_name"]?></p>            
                    </div>
                    <button><a href="./PlaySong/play-song.php?id=<?php echo $row['lesson_id'];?>" class="playSong">Play</a> </button>     
                </div>

                    <?php
                }
            ?>
        <?php
        }else{
            echo "No data found";
        }
    }
?>
    </main>
  </body>
</html>
