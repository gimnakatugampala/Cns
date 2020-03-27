<!--Only be the header when the user signin or sign up  this wil  container the logo and the logout button -->

<?php 

//checking if the user is logged in

if (!isset($_SESSION['user_id'])) {
	header('Location:index.php');
}


 ?>

<header>
	<div class="container-fuild ">
		<div class="bg-warning">
		<h1 class=" text-left " title="ClicknStudy.lk">ClicknStudy<small>.lk</small></h1>
		<div class="inline">
			<div style="margin-left: 65%;margin-top: -3%;"><h4 class="text-primary">Welcome <?php echo $_SESSION['first_name']; ?>!</h4></div>
		<button class="btn btn-danger  btn-lg float-right " id="logout-btn" title="Click to get out"><a href="logout.php" style="color: white;">Logout</a></button>
		</div>
		<div class="clearfix"></div>
		</div><!-- bg-warning-->
	</div><!-- container-fliud-->
</header>

