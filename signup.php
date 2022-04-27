<?php 
include_once('_dbconnection.php');
session_start();
// initialize
$user_id = 0;
$errors = array();
$bool=true;
if (isset($_POST['signup'])) { 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // receive all input values from the form
    $name=   mysqli_real_escape_string($conn,$_POST['name']);
    $username =  mysqli_real_escape_string($conn,$_POST['email']);
    $password_1 = mysqli_real_escape_string($conn,$_POST['pass']);
        try {
            //
            $result=mysqli_query($conn,"select * from tbl_users"); //query the user table
            while($row=mysqli_fetch_array($result)) //display all rows from query
            {
                $table_users=$row['email'];
                if ($table_users==$username) {
                    $bool=false;//sets bool to false
                    print'<script>alert("username has been taken!");</script>';//redirects to sigup.php
                }
            }
            if($bool) //checks if bool is true
            {
                $password = ($password_1);//encrypt the password before saving in the database
                $query2 = "INSERT INTO tbl_users VALUES($user_id,'$name','$username','$password')";
                mysqli_query($conn, $query2);
                print '<script>alert("Successfully Registered!");</script>';//prompts the user
                print '<script>window.location.assign("login.php");</script>';//redirect to login.php
            }
        } catch (Exception $e) {
            print $e;
        }
      
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<body>
        <!-- Sign up form -->
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
						Sign up
					</span>
                    <form method="POST" class="register-form" id="register-form">
                            <div class="form-group ">
                                <label for="name"><i class="form-label"></i></label>
                                <input type="text"  class="form-control" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="email"><i class="form-label"></i></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="pass"><i class="form-label"></i></label>
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"/>
                            </div>
                        
                            <div class="form-group">
                                <label for="re-pass"><i class="form-label"></i></label>
                                <input type="password" class="form-control" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <br>
                            <!-- <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div> -->
				
					<div class="container-login100-form-btn pt-1 ">
						<button class="login100-form-btn" name="signup">
							Sign Up
						</button>
					</div>
					<div class="text-center p-t-46 p-b-20 mt-3">
						<span class="txt2">
							Or Sign Up With
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
                    DDO-MobileShopCenter <a href="login.php"> Terms of service</a> & <a href="login.php"> Privacy Policy</a>
						</span>
                        <br>
						<span class="txt2">
						Have an account?<a href="login.php"> Login</a>
						</span>
					</div>
				</form>
			</div>
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
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("fas fa-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
    </script>




            
            




</body>
</html>