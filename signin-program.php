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
						 AND password = '{$hashed_password} '  
						LIMIT 1";

			$result_set = mysqli_query($connection, $query);

			if ($result_set) {
				// query succesfful

				if (mysqli_num_rows($result_set) == 1) {
					// valid user found
					$user = mysqli_fetch_assoc($result_set);
					$_SESSION['user_id'] = $user['user_id'];
					$_SESSION['first_name'] = $user['first_name'];

					//updating last login
					$query = "UPDATE users SET last_login = NOW()";
					$query .="WHERE id = {$_SESSION['user_id']} LIMIT 1";

					$result_set = mysqli_query($connection,$query);

					if (!$result_set) {
						die("Database Query Failed");
					}
					// redirect to users.php
					header('Location:home-bio-eng-phy.php');
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