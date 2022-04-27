<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>DAVAO DE-ORO | Mobile Shop Center</title>
        <link rel="shortcut icon" href="img/fav.ico" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
         crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/b1e255aac3.js" crossorigin="anonymous"></script>
    </head>
  <body>
        <header class="header p-3 mb-5">

            <!-- Navigation bar --> 
             
            <nav class="navbar navbar-expand-lg navbar-light   bg-light fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.html"><img src="img/logo-transparent.png" alt="" width="80 px" height="70 px"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="products.php">Products</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="aboutus.php">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search in ddo-mobileshopcenter" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"> <i class="fas fa-shopping-cart"></i> Cart</a>
                            </li>
                            </ul>
                    </form>
                    </div>
                </div>
              </nav>
        </header>
    <!-- Page Content -->
<!-- Background image  with title -->
<section class="jumbotron text-center pt-5 text-light">
    <div class="container">
        <h1 class="jumbotron-heading">Contact Us</h1>
        <p class="lead text-muted mb-0">feel free to send us a message now!</p>
    </div>
</section>
<div class="container bg-light">
    <div class="row ">
        <div class="col mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container p-3 mb-2">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact us.
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-primary text-right">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                <div class="card-body">
                    <p>Davao De Oro,Montevista,new visayas</p>
                    <p>8801</p>
                    <p>blk 35 lot 20</p>
                    <p>Email : ddo-msc@gmail.com</p>
                    <p>Phone. + 639306619472</p>

                </div>

            </div>
        </div>
    </div>
</div>

    <div id="map">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2924.298197754321!2d126.02330431376761!3d7.685210994459805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNDEnMDYuOCJOIDEyNsKwMDEnMzEuOCJF!5e1!3m2!1sen!2sph!4v1636199750812!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Footer Starts Here -->
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
        Here you can use rows and columns to organize your footer
        content. Lorem ipsum dolor sit amet, consectetur adipisicing
        elit.
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
           >ddo-mobileshopcenter.com.com</a
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
         ><i class="fab fa-facebook-f"></i
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

  </body>
</html>