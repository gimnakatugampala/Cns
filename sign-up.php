
   <?php include_once('inc/top-header.php'); ?>
   <?php include_once('inc/functions.php'); ?>
    <link rel="stylesheet" href="css/main.css">
    <title>Welcome | SignUp  | ClicknStudy.lk</title>
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

</form><!--form group of signin-->
				<br>
				

				<!-- Should Strat to Code the Back end of the signup Form-->
				<div style="margin-bottom: 10%;margin-left: 30%;" >
			   <h3 title="It's Free and always Will be">Sign Up It's Free!</h3>
			   <!--the signup page should be pull to the right-->
				 <br>
				 <?php include_once('insert-user.php'); ?>

				 <?php 

			if (!empty($errors)) {
				echo '<div class="errmsg alert-danger">';
				echo '<b>There were error(s) on your form.</b><br>';
				foreach ($errors as $error) {
					echo '- ' . $error . '<br>';
				}
				echo '</div>';
			}

		 ?>


				<form class="form-horizontal " role="form" method="post" action="sign-up.php"  >
					<div class="form-group form-inline">
						<label class="control-label">First Name</label>
						<div class="col-sm-8">
							<input  class="form-control" type="text" name="first_name" placeholder="First Name" <?php echo 'value="' . $first_name . '"'; ?> >
						</div><!-- col-sm-5 of first name -->
					</div><!-- form-group of first name -->


					<div class="form-group form-inline">
						<label class="control-label">Last Name</label>
						<div class="col-sm-8">
							<input  class="form-control" type="text" name="last_name" placeholder="Last Name" <?php echo 'value="' . $last_name . '"'; ?>>
						</div><!-- col-sm-5 of last name -->
					</div><!-- form-group of last name -->

					<div class="form-group form-inline">
						<label class="control-label">Username</label>
						<div class="col-sm-8">
							<input  class="form-control" type="text" name="username" placeholder="Username" <?php echo 'value="' . $username . '"'; ?>>
						</div><!-- col-sm-5 of username -->
					</div><!-- form-group of username -->

					<div class="form-group form-inline">
						<label class="control-label">Email Address</label>
						<div class="col-sm-8">
							<input  class="form-control" type="email" name="email" placeholder="Email" <?php echo 'value="' . $email . '"'; ?>>
						</div><!-- col-sm-5 of email -->
					</div><!-- form-group of email -->

					<div class="form-group form-inline">
						<label class="control-label">Birthday</label>
						<div class="col-sm-8">
							<input  class="form-control" type="date" name="birth_date">
						</div><!-- col-sm-5 of birthday -->
					</div><!-- form-group of birthday -->

					<div class="form-group form-inline">
						<label class="control-label">School</label>
						<div class="col-sm-8">
							<input  class="form-control" type="text" name="school" placeholder="Enter Your School" <?php echo 'value="' . $school . '"'; ?> >
						</div><!-- col-sm-5 of school -->
					</div><!-- form-group of school -->

					<div class="form-group form-inline">
						<label class="control-label">Password</label>
						<div class="col-sm-8">
						<input  class="form-control" type="password" name="password" placeholder="Password" id="password">
						</div><!-- col-sm-5 of  sign up paswword -->
					</div><!-- form-group  of sign up password-->

					<div class="form-group form-inline">
						<label class="control-label">Password:</label>
						<div class="col-sm-8">
							<input  class="form-control" type="password" name="password_2" placeholder=" Confirm Password" id="confirm_password" >
						</div><!-- col-sm-5 of  sign up  confirm paswword -->
					</div><!-- form-group  of sign up  confirm password-->

					<!--Gender Dropdown Bar-->
					<div class="form-group form-inline">
						<label class="control-label">Gender</label>
						<div class="col-sm-8">
							<select class="form-control" name="gender" >
							<option selected disabled>Select Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>Other</option>
							</select>
						</div><!-- col-sm-5 of gender -->
					</div><!-- form-group of gender -->


					<div class="form-group form-inline">
						<label class="control-label">Your Stream</label>
						<div class="col-sm-8">
						<select class="form-control" name="stream">
							<option selected disabled>Select Stream</option>
							<option>Physical Science</option>
							<option>Biology</option>
							<!-- <option>Commerce</option> -->
						</select>
					</div>
					</div><!-- form-group -->

					<div class="form-group form-inline">
						<label class="control-label">Medium</label>
						<div class="col-sm-8">
							<select class="form-control" name="medium">
								<option selected disabled>Select Medium</option>
								<option>English Medium</option>
							</select>
						</div><!-- col-sm-5 of medium -->
					</div><!-- form-group of medium -->

					<!--Signup Button-->
					<input value="Signup" class ="btn btn-success col-sm-2" type="submit" name="btn-signup" title="Press the button to SignUp">
					   <a href="index.php" style="margin-left: 12px;">Already Have an account ?</a>
				</form>
			</div><!--The styling div -->

				<?php include_once('inc/footer-index.php'); ?>

       <script type="text/javascript" src="js/bootstrap.min.js"></script>
       <script>
       	
       	var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

       </script>
      </body>
      </html>

      <?php mysqli_close($connection); ?>