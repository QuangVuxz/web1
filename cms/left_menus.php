<?php
	include './inc/count.php';
?>
<div class="col-md-3">
	<div class="list-group">
		<a href="admin.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
		Dashboard <span class="badge"><?php echo $num_ex + $num_user; ?></span>
		</a>		
		<a href="exercises.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Exercises<span class="badge"><?php echo $num_ex?></span></a>
		<a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge"><?php echo $num_user?></span></a>
	</div>
</div>