
<?php 

  $errors = array();
  $first_name = '';
  $last_name = '';
  $username = '';
  $email = '';
  $birth_date = '';
  $school = '';
  $password = '';
  $gender = '';
  $stream = '';
  $medium = '';
  

  if (isset($_POST['btn-signup'])) {
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $birth_date = $_POST['birth_date'];
    $school = $_POST['school'];
    $password = $_POST['password'];
    // $gender = $_POST['gender'];
    // $stream = $_POST['stream'];
    // $medium = $_POST['medium'];

    // checking required fields
    $req_fields = array('first_name', 'last_name','username', 'email','birth_date','school' ,'password');

    foreach ($req_fields as $field) {
      if (empty(trim($_POST[$field]))) {
        $errors[] = $field . ' is required';
      }
    }

    // checking max length
    $max_len_fields = array('first_name' => 50, 'last_name' =>100, 'email' => 100,'school' =>100, 'password' => 40);

    foreach ($max_len_fields as $field => $max_len) {
      if (strlen(trim($_POST[$field])) > $max_len) {
        $errors[] = $field . ' must be less than ' . $max_len . ' characters';
      }
    }

    // checking email address
    if (!is_email($_POST['email'])) {
      $errors[] = 'Email address is invalid.';
    }
 


    // checking if email address and username already exists
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $query = "SELECT * FROM users WHERE email = '{$email}' AND username ='{$username}' LIMIT 1";

    $result_set = mysqli_query($connection, $query);

    if ($result_set) {
      if (mysqli_num_rows($result_set) == 1) {
        $errors[] = 'Email address/ Username already exists';
      }
    }

    if (empty($errors)) {
      // no errors found... adding new record
      $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
      $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
      $username = mysqli_real_escape_string($connection, $_POST['username']);
      $school = mysqli_real_escape_string($connection,$_POST['school']);
      $password = mysqli_real_escape_string($connection, $_POST['password']);
      $gender = mysqli_real_escape_string($connection,$_POST['gender']);
	  $stream = mysqli_real_escape_string($connection,$_POST['stream']);
	  $medium = mysqli_real_escape_string($connection,$_POST['medium']);
      // email address  and username is already sanitized
      $hashed_password = sha1($password);

      $query = "INSERT INTO users ( ";
      $query .= "first_name, last_name,username,email,birth_date,school,password,gender,stream,medium";
      $query .= ") VALUES (";
      $query .= "'{$first_name}', '{$last_name}', '{$username}', '{$email}', '{$birth_date}','{$school}','{$hashed_password}','{$gender}','{$stream}','{$medium}'";
      $query .= ")";

      $result = mysqli_query($connection, $query);

      if ($result) {
        // query successful... redirecting to users page
        header('Location:home-bio-eng-phy.php');
      } else {
        $errors[] = 'Failed to add the new record.';
      }


    }

 }



?>