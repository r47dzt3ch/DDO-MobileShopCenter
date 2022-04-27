<?php
session_start(); 
include('_dbconnection.php');
if (isset($_POST['login'])) { 
if (isset($_POST['email']) && isset($_POST['pass'])) {
function test_input($data) {
	$user="";
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
$email = test_input($_POST["email"]);
$password = test_input($_POST["pass"]);
if (empty($email)) {

	header("Location: login.php?error=UserName is required");

	exit();

}else if(empty($password)){

	header("Location: login.php?error=Password is required");

	exit();

}else{
	$result=mysqli_query($conn,"select * from tbl_users WHERE email='$email' AND pass='$password' "); //query the user table

	if (mysqli_num_rows($result) === 1) {

		$row = mysqli_fetch_assoc($result);

		if ($row['email'] === $email && $row['pass'] === $password) {

			echo "Logged in!";

			$_SESSION['email'] = $row['email'];

			$_SESSION['Name'] = $row['Name'];

			$_SESSION['user_id'] = $row['user_id'];
			print '<script>window.location.assign("index.php");</script>';//redirect to login.php
			exit();

		}else{

			header("Location: login.php?error=Incorect User name or password");

			exit();

		}

	}else{

		header("Location: login.php?error=Incorect User name or password");

		exit();

	}

}

}else{

header("Location: login.php");

exit();

}
}

// if (isset($_POST['login'])) { 
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
// 	$email = mysqli_real_escape_string($conn,$_POST["email"]);
// 	$password =mysqli_real_escape_string($conn,$_POST["pass"]);
// 	$result=mysqli_query($conn,"select * from tbl_users"); //query the user table
// 	while($user=mysqli_fetch_array($result)) //display all rows from query
// 	{
// 		if(($user['email'] != $email) && ($user['pass'] != $password)) {
// 			print '<script>alert("Your account and/or password is incorrect, please try again");</script>';//prompts the user
// 			// print '<script>window.location.assign("login.php");</script>';//redirect to login.php
// 		}
// 	else {
// 		print '<script>alert("login succesfully");</script>';//prompts the user
// 		// header("Location: index.php");
// 		print '<script>window.location.assign("index.php");</script>';//redirect to login.php	
// 	}
// 	}

// }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<title>DAVAO DE-ORO | Mobile Shop Center</title>
        <link rel="shortcut icon" href="img/fav.ico" />
        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" type="text/css" href="util.css.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
         crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/b1e255aac3.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<nav class="log-header">
			<a class="navbar-brand" href="index.php"><img src="img/logo-transparent.png" alt="Home" width="80 px" height="70 px"></a>
			<a class="p-3 align-text-middle h4" href="">Help?</a>	
			</nav>
			<div class="wrap-login100" style="background-color: rgb(253, 65, 1);">
				<form class="container-form validate-form p-3 m-5" method="POST">
					<span class="login100-form-title p-b-43">
						Log In
					</span>
					<?php if (isset($_GET['error'])) { ?>

						<p class="error"><?php echo $_GET['error']; ?></p>

					<?php } ?>

					<div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" style="font-size: 2rem;  id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
              <input name="email" type="email" value="" class="input form-control" id="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" />
            </div>
			<div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" style="font-size: 2rem; id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input name="pass" type="password" value="" class="input form-control" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
              <div class="input-group-append">
                <span class="input-group-text" style="font-size: 2rem;" onclick="password_show_hide();">
                  <i class="fas fa-eye" id="show_eye"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                </span>
              </div>
            </div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
		
					<div class="container-login100-form-btn pt-1 ">
						<button class="login100-form-btn" name="login">
							LOG IN
						</button>
					</div>
					<div class="text-center p-t-46 p-b-20 mt-3">
						<span class="txt2">
							Or Login With
						</span>
					</div>
					<div class=" social-form justify-content-center ">				 
						<div class="d-inline-flex p-2 bd-highlight">
						<a href=""><i class="fab fa-google" aria-hidden="true"></i> </a><p>oogle</p>
						</div>
						<div class="d-inline-flex p-2 bd-highlight">
						<a href=""><i class="fab fa-facebook" aria-hidden="true"></i> </a><p>acebook</p>
						</div>
					</div>
				
					<div class="text-center p-t-46 p-b-20 mt-3">
						<span class="txt2">
						Dont have account?<a href="signup.php"> Sign up here</a>
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>
    <!-- Footer -->
    <footer
            class="text-center text-lg-start text-white"
            style="background-color: #45526e"
            >
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                      <img src="img/logo-transparent.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
                      <h6 class="text-uppercase mb-4 font-weight-bold">
                        ddo-mobileshopcenter
                      </h6>
                    </a>
                  </div>
              <p>
            This online store is one and only store in  Davao De Oro Province
              </p>
            </div>
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
              <p><a class="text-white">mobile-accesories</a></p>
              <p><a class="text-white">mobile-cases</a></p>
              <p><a class="text-white">latest smartphone</a> </p>
              <p> <a class="text-white">eloading services</a></p>
            </div>
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
                Useful links
              </h6>
              <p><a href="acount.html" class="text-white">Your Account</a></p>
              <p><a class="text-white">Become an Affiliate</a></p>
              <p> <a class="text-white">Shipping Rates</a></p>
              <p><a class="text-white">Help</a></p>
            </div>
  
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p><i class="fas fa-home mr-3"></i> Davao De Oro, Montevista, PH</p>
              <p><i class="fas fa-envelope mr-3"></i> ddo-msc@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 639306619472</p>
              <p><i class="fas fa-print mr-3"></i> + 639306619472</p>
            </div>
            <!-- Grid column -->
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
  
        <hr class="my-3">
  
        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
          <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8 text-center text-md-start">
              <!-- Copyright -->
              <div class="p-3">
                © 2021 Copyright:
                <a class="text-white" href="https://..."
                   >ddo-mobileshopcenter.com</a
                  >
              </div>
              <!-- Copyright -->
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
              <!-- Facebook -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button"
                 ><i class="fab fa-facebook"></i
                ></a>
  
              <!-- Twitter -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button"
                 ><i class="fab fa-twitter"></i
                ></a>
  
              <!-- Google -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button"
                 ><i class="fab fa-google"></i>
            </a>
              <!-- Instagram -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button"
                 ><i class="fab fa-instagram"></i
                ></a>
            </div>
            <!-- Grid column -->
          </div>
        </section>
        <!-- Section: Copyright -->
      </div>
      <!-- Grid container -->
    </footer>
    <!-- Footer -->

   

	<script>
function password_show_hide() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
    </script>
</body>
</html>