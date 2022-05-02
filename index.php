<?php 
session_start();
if(!isset($_SESSION['Name'])){
    $username="SignIn/SignUp";
    $redirect="login.php";
}else{
    $username=$_SESSION['Name'];
    $redirect="#";
    }?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title><?php echo "DAVAO DE-ORO | Mobile Shop Center";?></title>
        <link rel="shortcut icon" href="img/fav.ico" />
        <link rel="stylesheet" type="text/css" href="css/style.css">     
              <!-- Bootstrap core CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
         crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"></script>

        <!-- <link href="vendor/css/bootstrap.min.css" rel="stylesheet">
        
        <link href="vendor/js/bootstrap.min.js" rel="stylesheet">
        <link href="admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
         <script src="https://kit.fontawesome.com/b1e255aac3.js" crossorigin="anonymous"></script>
        </head>
    <body>
        <header class="section-header  mb-5 fixed-top" id="#headerNavBar_Responsive">
            <!-- Navigation bar -->  
        <nav class="navbar-dark navbar-expand p-0 bg-dark navbar-wrapper container-wrapper">
            <div class=" nav-wrapper container-wrapper">
                 <div class="flex  v-center nav_wrapper_style">
            <ul class="navbar-nav d-none d-md-flex mr-auto">
                <li class="nav-item"><a class="nav-link" href="#" data-abc="true">Cash On Delivery</a></li>
                <li class="nav-item"><a class="nav-link" href="#" data-abc="true">Free Delivery</a></li>
            </ul>
                 <label for="">Follow us on:</label> 
              <a action="_blank" href="#"><i class="fa fa-facebook"></i></a>
              <a action="_blank"href="#"><i class="fa fa-twitter"></i></a>
              <a action="_blank"href="#"><i class="fa fa-instagram"></i></a>

            <div class=" navbar-nav  ms-auto ">
                <li class="nav-item" data-bs-toggle="<?php print $dataT; ?>"  data-bs-target="#account"  aria-controls="account">
                    <a class="nav-link" href="<?php print $redirect;?>"> 
                        <i class="fas fa-user-circle fa-fw"></i>
                        <span class="nav-link-text"><?php echo $username;?></span>
                    </a>
                            <ul class="nav-item collapse" id="account">
                                <li  class="nav-link-text">
                                    <a  href="index.php?My-Account"> My account </a>
                                </li>
                                <li  class="nav-link-text">
                                    <a  href="index.php?purchases"> My Purchase </a>
                                </li>

                                <li  class="nav-link-text">
                                    <a  href="logout.php"> Logout </a>
                                </li>
                            </ul>
                </li>
            </div>
         
            </div>     
        </div> 
        <!-- container // -->
    </nav> 
            <nav class="navbar navbar-expand-lg navbar-light  bg-light " >
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.html"><img src="img/ddomsc_logo.png" alt="" width="100 px" height="100 px"></a>
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
       <!-- introduction -->
   
      <div class="p-3 mb-2  bg-light  text-dark">
        <div class="container-fluid"> 
            <div id="carousel-16124340768622aa4c" class="carousel  slide" data-bs-ride="carousel" data-bs-pause="hover" data-bs-interval="6000">
              <!-- Indicators -->
                  <ol class="carousel-indicators mb-3">    
                          <li data-bs-target="#carousel-16124340768622aa4c" data-bs-slide-to="0" class="active"> </li>
                          <li data-bs-target="#carousel-16124340768622aa4c" data-bs-slide-to="1" class=""></li>
                  </ol>
              <div class="carousel-inner">
                      <div class="carousel-item carousel-item-next carousel-item-start"> 
                         <img class="d-block w-100 object-fit-cover h-auto" src="img/store2.png" srcset="img/store2.png 1600w" alt="" width="1920" height="640" loading="lazy" style="min-height: 360px;">
                              <div class="carousel-caption">       
                                      <h3 class="h3 ">
                                          Welcome to Davao De Oro mobile shop center
                                      </h3>
                                      <div class="rte">
                                          <p>Shop for the latest Smartphone deals from Realme, Apple, Oppo, Xiaomi samsung, Vivo and more<br><a href="products.html" class=" btn btn_explore">Explore Now &#8594;</a></p>
                                      </div>  
                              </div>
                      </div>
                      <div class="carousel-item active carousel-item-start"> 
                              <img class="d-block w-100 object-fit-cover h-auto" src="img/store1.jpg" alt="" width="1920" height="640" loading="lazy" style="min-height: 360px;">
                              <div class="carousel-caption">
                                  
                                      <h3 class="h3">
                                          Modern, Fast and Simple
                                      </h3>                                 
                              </div>
                      </div>                 
              </div>              
                  <a class="carousel-control-prev" href="#carousel-16124340768622aa4c" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true">
                      </span>
                      <span class="visually-hidden">
                          Previous
                      </span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-16124340768622aa4c" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true">
                      </span>
                      <span class="visually-hidden">
                          Next
                      </span>
                  </a>
            </div>
         </div>
      </div>
      <!-- Latest Products -->
  <div class="container">
    <div class="heading-wrapper mb-3 overflow-hidden">
        <h2 class="heading mb-1 text-center h2">
            Latest Products
        </h2>
    </div>
    <!-- Items -->
<ul class="items-grid list-unstyled row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-6 g-3 g-sm-3 g-xl-4">
        <li class="product-item col pb-5 text-center">
           <!-- Product Image -->
            <a class="d-block text-decoration-none" href="/product-details.html">              
                <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/oppo A16.png" alt="OPPO A16" width="480" height="480" loading="lazy">        
                <!-- Product Title -->
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3 class="product-item-title h6 mb-1">
                  OPPO A16
                </h3>
                    <p class="product-item-price mb-1">            
                        <span class="price">      
                            ₱10,000.00
                        </span>
                    </p>
            </a>
        </li>
        <li class="product-item col pb-5 text-center">
          <!-- Product Image -->
           <a class="d-block text-decoration-none" href="/product-details.html">              
               <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/oppo A54.png" alt="OPPO A16" width="480" height="480" loading="lazy">        
               <!-- Product Title -->
               <div class="rating">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
               </div>
               <h3 class="product-item-title h6 mb-1">
                 OPPO A54
               </h3>
                   <p class="product-item-price mb-1">            
                       <span class="price">      
                           ₱9,999.00
                       </span>
                   </p>
           </a>
       </li>
       <li class="product-item col pb-5 text-center">
        <!-- Product Image -->
         <a class="d-block text-decoration-none" href="/product-details.html">              
             <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/oppo A74.png" alt="OPPO A16" width="480" height="480" loading="lazy">        
             Product Title
             <div class="rating">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
             </div>
             <h3 class="product-item-title h6 mb-1">
               OPPO A74
             </h3>
                 <p class="product-item-price mb-1">            
                     <span class="price">      
                         ₱15,999.00
                     </span>
                 </p>
         </a>
     </li>
     <li class="product-item col pb-5 text-center">
      <!-- Product Image -->
       <a class="d-block text-decoration-none" href="/product-details.html">              
           <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/oppo reno5.png" alt="OPPO A16" width="480" height="480" loading="lazy">        
           <!-- Product Title -->
           <div class="rating">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
           </div>
           <h3 class="product-item-title h6 mb-1">
             OPPO RENO5
           </h3>
               <p class="product-item-price mb-1">            
                   <span class="price">      
                       ₱18,999.00
                   </span>
               </p>
       </a>
   </li>
   <li class="product-item col pb-5 text-center">
    <!-- Product Image -->
     <a class="d-block text-decoration-none" href="/product-details.html">              
         <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/oppo reno6.png" alt="OPPO A16" width="480" height="480" loading="lazy">        
         <!-- Product Title -->
         <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star-half-alt"></i>
         </div>
         <h3 class="product-item-title h6 mb-1">
           OPPO RENO6
         </h3>
             <p class="product-item-price mb-1">            
                 <span class="price">      
                     ₱26,999.00
                 </span>
             </p>
     </a>
 </li>
 <li class="product-item col pb-5 text-center">
  <!-- Product Image -->
   <a class="d-block text-decoration-none" href="/product-details.html">              
       <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/oppo A15.png" alt="OPPO A16" width="480" height="480" loading="lazy">        
       <!-- Product Title -->
       <div class="rating">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star-half-alt"></i>
       </div>
       <h3 class="product-item-title h6 mb-1">
         REALME A15
       </h3>
           <p class="product-item-price mb-1">            
               <span class="price">      
                   ₱6,999.00
               </span>
           </p>
   </a>
</li>
</ul>
</div>
    <!-- exclusive -->
    <div class="row align-items-center">
        <div class="col-4 p-3   d-flex justify-content-center">
            <img src="img/realme-8i.png" class="offer-img">
        </div>
        <div class="col-8">
            <h4>Exclusively Available</h4>
            <h1>Realme 8i | Smart phone</h1>
            <small>The phone is rumoured to come with a 6.59-inch touchscreen display.<br> Realme 8i is expected to be powered by an octa-core MediaTek Helio G96 processor and come with 4GB of RAM. <br>The Realme 8i is rumoured to run Android 11 and is expected to be powered by a 5000mAh battery<br>.</small>
            <br>
            <a href="/product-details.html" class="btn btn-dark" >Buy Now &#8594;</a>
        </div>
        </div>

        <!-- testimonial -->
        <section id="testimonials-16131300457e5a9b91" class="testimonials bg-light pt-0 pb-0 mt-0 mb-7">
          <div class="container">
      
              
                  <div class="heading-wrapper mb-2 overflow-hidden">
      
                      
                          <h2 class="heading mb-1 text-center h2">
                              Customer testimonials
                          </h2>
                      
      
                      
      
                  </div>
              
      
              <!-- Carousel -->
              <div id="testimonials-carousel-16131300457e5a9b91" class="testimonials-carousel carousel slide carousel-dark has-controls has-indicators " data-bs-ride="carousel" data-bs-pause="hover" data-bs-interval="6000">
      
                  <!-- Indicators -->
                  
                      <ol class="carousel-indicators mb-3 p-3">
                              <li data-bs-target="#testimonials-carousel-16131300457e5a9b91" data-bs-slide-to="0" class="active">
                              </li>              
                              <li data-bs-target="#testimonials-carousel-16131300457e5a9b91" data-bs-slide-to="1" class="">
                              </li>           
                              <li data-bs-target="#testimonials-carousel-16131300457e5a9b91" data-bs-slide-to="2" class="">
                              </li>    
                      </ol>
                  
                  
                  <div class="carousel-inner">
                      
                          <div class="carousel-item active">
                              
                              <figure class="text-center">
                                  <blockquote class="blockquote">
                                      <p>All in all speed of transaction,secure payment facility, good quality products, free returns, and the good customer service made e me feel comfortable with shopping online in Davao De-Oro Mobile SHop Center</p>
                                  </blockquote>
      
                                  <figcaption class="blockquote-footer">
                                      
                                          
                                          <img class="img-fluid mb-2 rounded-circle" src="img/testi-1.jpg" alt="" width="60" height="60" loading="lazy">
                                      
      
                                      <span class="d-block fst-italic">
                                          Miray
                                      </span>
      
                                  </figcaption>
      
                              </figure>
      
                          </div>
                      
                          <div class="carousel-item">
                              
                              <figure class="text-center">
                                  <blockquote class="blockquote">
                                      <p>Lahat ng mga items ay puro may maayos na kalidad, dito lang yan sa Davao De-Oro Mobile SHop Center.</p>
                                  </blockquote>
      
                                  <figcaption class="blockquote-footer">
                                      
                                          
                                          <img class="img-fluid mb-2 rounded-circle" src="img/testi-2.jpg" alt="" width="60" height="60" loading="lazy">
                                      
      
                                      <span class="d-block fst-italic">
                                          Catty
                                      </span>
      
                                  </figcaption>
      
                              </figure>
      
                          </div>
                      
                          <div class="carousel-item">
                              
                              <figure class="text-center">
                                  <blockquote class="blockquote">
                                      <p>super satisfied ako sa online store, Dahil Napakabarato na, at meron pang discount dito lang yan sa Davao De-Oro Mobile SHop Center.</p>
                                  </blockquote>
      
                                  <figcaption class="blockquote-footer">
                                      
                                          
                                          <img class="img-fluid mb-2 rounded-circle" src="img/testi-3.jpg" alt="" width="60" height="60" loading="lazy">
                                      
      
                                      <span class="d-block fst-italic">
                                          Dogy
                                      </span>
      
                                  </figcaption>
      
                              </figure>
      
                          </div>
                      
                  </div>
      
                  
                      <a class="carousel-control-prev" href="#testimonials-carousel-16131300457e5a9b91" role="button" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true">
                          </span>
                          <span class="visually-hidden">
                              Previous
                          </span>
                      </a>
                      <a class="carousel-control-next" href="#testimonials-carousel-16131300457e5a9b91" role="button" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true">
                          </span>
                          <span class="visually-hidden">
                              Next
                          </span>
                      </a>
                  
      
              </div>
      
          </div>
      </section>
<!-- logo section -->
              <section id="logo-list-1613034094b1e14cbd" class="logo-list  pt-0 pb-0 mt-3 mb-8">
                <div class="container">
                    <ul class="logo-list-grid list-unstyled row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-6 row-cols-xl-6 row-cols-xxl-6 g-3 g-sm-3 g-xl-6">
                            <li class="logo-list-item text-center">
                                    <a href="/collections/all">
                                    <!-- Image -->
                                    <img class="logo-list-img img-fluid img-thumbnail" src="img/mobilebrands_logo/apple-logo.png" alt="" width="100" height="100" loading="lazy">    
                                    </a>
                            </li>                    
                            <li class="logo-list-item text-center">
                                    <a href="/collections/all">
                                    <!-- Image -->
                                    <img class="logo-list-img img-fluid img-thumbnail" src="img/mobilebrands_logo/oppo-logo.png" alt="" width="100" height="100" loading="lazy">
                                    </a>
                            </li>
                            <li class="logo-list-item text-center">
                                    <a href="/collections/all">
                                    <!-- Image -->                                    
                                    <img class="logo-list-img img-fluid img-thumbnail" src="img/mobilebrands_logo/realme-logo.png" alt="" width="100" height="100" loading="lazy">
                                 </a>          
                            </li>
                     <li class="logo-list-item text-center">
                                    <a href="/collections/all">            
                                    <!-- Image -->                                    
                                    <img class="logo-list-img img-fluid img-thumbnail" src="img/mobilebrands_logo/samsung-logo.png" alt="" width="100" height="100" loading="lazy">
                                    </a>        
                            </li>
                            <li class="logo-list-item text-center">           
                                    <a href="/collections/all">
                                    <!-- Image -->
                                    <img class="logo-list-img img-fluid img-thumbnail" src="img/mobilebrands_logo/Vivo-logo.png" alt="" width="100" height="100" loading="lazy">
                                    </a>
                            </li>
                            <li class="logo-list-item text-center">
                                    <a href="/collections/all">
                                    <!-- Image -->             
                                    <img class="logo-list-img img-fluid img-thumbnail" src="img/mobilebrands_logo/xiaomi-logo.png" alt="" width="100" height="100" loading="lazy">                                
                                    </a>
                            </li>
                    </ul>
                </div>
            </section>				
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
              <p><a href="login.php" class="text-white">Your Account</a></p>
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

    
        </body>   
</html>