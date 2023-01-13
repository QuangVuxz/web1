<?php
include '../config.php';
include('inc/header.php');
$id=$_GET['update'];
$sql=mysqli_query($conn,"SELECT * from `lesson_db` WHERE lesson_id=$id");
$row=mysqli_fetch_assoc($sql);
$name = $row['lesson_name'];
$video = $row['lesson_url'];
$image = $row['lesson_img'];
if(isset($_POST['submit'])){
    $name = $_POST['name'];
	$video = $_POST['video'];
	$image = $_POST['image'];
    $sql= mysqli_query($conn,"UPDATE `lesson_db` SET lesson_id=$id,lesson_name='$name',lesson_url='$video',lesson_img='$image' WHERE lesson_id=$id") or die('query failed');
    if($sql){
        // echo "Updated Successfully";
        header('location:exercises.php');
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
                                <label>Lesson name</label>
                                <input name="name" type="text" class="form-control" placeholder="Lesson name" value=<?php echo $name;?>>
                            </div>
                            <div class="form-group">
                                <label>Video</label>
                                <input name="video" type="text" class="form-control" placeholder="Video url" value=<?php echo $video;?>>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input name="image" type="text" class="form-control" placeholder="Image url" value=<?php echo $image;?>>
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
