<?php
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect("localhost","root","","db_ddo_mobilechopcenter");



// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);




  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM tbl_admin_users WHERE aname ='$username' OR aemail='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['aname'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['aemail'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
  	echo $password ;
    $query = "INSERT INTO tbl_admin_users(aname, aemail, apass) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    print '<script>window.location.assign("login.php");</script>';//redirect to dashboard
  }
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM tbl_admin_users WHERE aemail='$username' AND apass='$password'";
    $results = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($results);
    if (mysqli_num_rows($results) == 1) {
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['admin_name'] = $user['aname'];
      // $_SESSION['success'] = "You are now logged in";
      echo "<script>alert('You are Logged in into admin panel')</script>";
      print '<script>window.location.assign("/admin?dashboard");</script>';//redirect to dashboard
      // header('Location: index.php');
      exit;
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>