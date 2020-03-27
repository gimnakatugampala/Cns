
   <?php include_once('inc/top-header.php'); ?>
   <?php include_once('inc/functions.php'); ?>

   <?php 

	// check for form submission
	if (isset($_POST['signin_submit'])) {

		$errors = array();

		// check if the username and password has been entered
		if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1 ) {
			$errors[] = 'Username is Missing / Invalid';
		}

		if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 ) {
			$errors[] = 'Password is Missing / Invalid';
		}

		// check if there are any errors in the form
		if (empty($errors)) {
			// save username and password into variables
			$email 		= mysqli_real_escape_string($connection, $_POST['email']);
			$password 	= mysqli_real_escape_string($connection, $_POST['password']);
			$hashed_password = sha1($password);

			// prepare database query
			$query = "SELECT * FROM users 
						WHERE email = '{$email}' 
						AND password = '{$hashed_password}' 
						LIMIT 1";

			$result_set = mysqli_query($connection, $query);

			if ($result_set) {
				// query succesfful

				if (mysqli_num_rows($result_set) == 1) {
					// valid user found
					$user = mysqli_fetch_assoc($result_set);
					$_SESSION['user_id'] = $user['id'];
					$_SESSION['first_name'] = $user['first_name'];
					// redirect to users.php
					header('Location: home-bio-eng-phy.php');
				} else {
					// user name and password invalid
					$errors[] = 'Invalid Username / Password';
				}
			} else {
				$errors[] = 'Database query failed';
			}
		}
	}
?>
   
    <link rel="stylesheet" href="css/main.css">
    <title>Welcome |  LogIn | ClicknStudy.lk</title>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153095308-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153095308-1');
</script>
<script src="https://kit.fontawesome.com/3cd06e1a93.js" crossorigin="anonymous"></script>
</head>
<body>
	<!--The Header and the Background Color of the Page-->
<header>
	<div class="container-fuild ">
		<h1 class="bg-warning text-center" title="ClicknStudy.lk">ClicknStudy<small>.lk</small></h1>
	</div>
</header>

<!--The coming soon bar-->
 	<nav>
	<div class="list-group text-center">
					  <li class="list-group-item active">The Other Steams and Tutorials Will be comming soon!</li>
					</div><!----list-group-->
                </nav>
	<!--Creating the jumpotron-->

	<main>
		<div class="jumbotron">
			<div class="container alert alert-success ">
				<h1 class="text-center">All Tutorials For A/L Students</h1>
				<p class="text-center">Select Your Stream And Medium To Learn for Free!</p>
				<p class="text-center">Study Website for Srilankan Students</p>
			</div><!-- container -->
		</div><!-- jumbotron -->
	</main>


	<!-- The coding of the Signin Section -->

	<section>
		<!--The signin form of the index page-->

		<div class="container">
			<div class="form-row ">
				<form action="index.php" method="post" class="col-md-4" style="margin-top: 10%;margin-bottom: 10%;margin-left: 10%;">
					<?php include_once('signin-program.php'); ?>
					<?php 

						if (isset($errors) && !empty($errors)) {
							echo '
					  <div class=" alert alert-danger alert-lg">Invalid Username / Password</div>';
						}

					 ?>

					 <?php 
					 if (isset($_GET['logout'])) {
					 	echo '<div class="alert alert-success alert-lg">You have Successfully Logged Out!</div>';
					 }

					  ?>

					<label>Email</label>
					<input  class = "form-control " type="email" name="email" placeholder="Enter Email">
					<br>
					<label>Password</label>
					<input  class="form-control" type="password" name="password" placeholder="Enter Password">
					<br>
					<input type="submit" name="signin_submit" class="btn btn-success col-sm-4" value="SignIn" title="Press the button to SignIn"> <button class="btn btn-success col-md-4 col-sm-4 mt-1" title="press the button"><a href="sign-up.php"style="color: white;">Register</a></button>
					<br>
				
			</div><!--Rows of both sign in form in a row-->

			
		</div><!-- container -->

	</section>

	

	<?php include_once('inc/footer-index.php'); ?>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

<?php mysqli_close($connection); ?>