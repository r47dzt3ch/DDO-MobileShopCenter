<!DOCTYPE html>
<html>
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
<!-- Products -->
<section class="jumbotron text-center pt-5 text-light">
    <div class="container">
        <h1 class="jumbotron-heading">products</h1>
    </div>
</section>

<div class="container">

  <!-- Collection Utitilies -->
  
      <div id="collection-utilities" class="d-flex flex-column flex-lg-row bg-light rounded mb-7 py-4 px-4 justify-content-between">

          <!-- Filtering -->
          
              <div id="collection-filtering" class="input-group w-auto js mb-3 mb-lg-0">
                  <label class="input-group-text" for="collection-filtering-select">
                      Filter by
                  </label>
                  <select id="collection-filtering-select" class="form-select" style="min-width: 160px;">
                      <option value="/collections/all">
                          All products
                      </option>
                      
                          <option value="/collections/all/Exclusive">
                              Exclusive
                          </option>
                      
                          <option value="/collections/all/Highest-Price">
                              Highest-Price
                          </option>
                      
                          <option value="/collections/all/latest">
                              latest
                          </option>
                      
                          <option value="/collections/all/Low-Price">
                              Low-Price
                          </option>
                      
                          <option value="/collections/all/Lowest-Price">
                              Lowest-Price
                          </option>
                      
                          <option value="/collections/all/old">
                              old
                          </option>
                      
                  </select>
              </div>
          

          <div id="collection-utilities-right" class="d-flex align-items-center">
              
              <!-- Sorting -->
              
                  <div id="collection-sorting" class="input-group js">
                      <label class="input-group-text" for="collection-sorting-select">
                          Sort by
                      </label>
                      <select id="collection-sorting-select" class="form-select">
                          
                              <option value="manual">
                                  Featured
                              </option>
                          
                              <option value="best-selling">
                                  Best selling
                              </option>
                          
                              <option value="title-ascending">
                                  Alphabetically, A-Z
                              </option>
                          
                              <option value="title-descending">
                                  Alphabetically, Z-A
                              </option>
                          
                              <option value="price-ascending">
                                  Price, low to high
                              </option>
                          
                              <option value="price-descending">
                                  Price, high to low
                              </option>
                          
                              <option value="created-ascending">
                                  Date, old to new
                              </option>
                          
                              <option value="created-descending">
                                  Date, new to old
                              </option>
                          
                      </select>
                  </div>
              

              <!-- Layout Switcher -->
              
                  
                      <button id="collection-layout-btn" class="btn btn-outline-secondary btn-sm ms-3" data-bs-toggle="tooltip" data-bs-placement="bottom" data-value="layout-list" title="" aria-hidden="true" data-bs-original-title="List layout">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" class="icon icon-list " viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
<line x1="8" y1="6" x2="21" y2="6"></line>
<line x1="8" y1="12" x2="21" y2="12"></line>
<line x1="8" y1="18" x2="21" y2="18"></line>
<line x1="3" y1="6" x2="3.01" y2="6"></line>
<line x1="3" y1="12" x2="3.01" y2="12"></line>
<line x1="3" y1="18" x2="3.01" y2="18"></line>
</svg>
                      </button>
                  
              

          </div>

      </div>
  

  <!-- No products alert -->
  

      <!-- Items List/Grid -->
      

          
              










<ul class="items-grid list-unstyled row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-6 g-3 g-sm-3 g-xl-4">


  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/products/huawei-p50-pro">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/Huawei P50 pro.png" alt="HUAWEI P50 Pro" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  HUAWEI P50 Pro
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      Huawei
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.638514adeFvUdU" data-mce-fragment="1">HUAWEI P50 Pro cel...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱7,000.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/huawei-p50">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/huawei-p50-series.png" alt="Huawei-P50" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  Huawei-P50
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      Huawei
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.4c3914adbCVtoW" data-mce-fragment="1">cellphone sale ori...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱3,400.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="product-details.html">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/oppo A15.png" alt="OPPO A15" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  OPPO A15
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      realme
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.165052b5J39llt" data-mce-fragment="1">[New] OPPO A15 | 1...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱6,999.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/oppo-a16">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/oppo A16.png" alt="OPPO A16" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  OPPO A16
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      oppo
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.31ca64b9tHk9ok" data-mce-fragment="1">[New Online Exclus...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱6,498.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/oppo-a54">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/oppo A54.png" alt="OPPO A54" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  OPPO A54
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      oppo
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.5c0a4947VgCHjP" data-mce-fragment="1">[E-COMMERCE EXCLUS...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱9,999.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/oppo-a74">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/oppo A74.png" alt="OPPO A74" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  OPPO A74
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      oppo
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i1.ca3e418cNcvC9Q" data-mce-fragment="1">[E-COMMERCE EXCLUS...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱15,999.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/oppo-reno5">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/oppo reno5.png" alt="OPPO Reno5" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  OPPO Reno5
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      oppo
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-mce-fragment="1">OPPO Reno5 4G Qualcomm Snapdragon 720G 8 + 128GB - 50W SuperVOOC - AI Mixed ...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱18,999.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/oppo-reno6">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/oppo reno6.png" alt="OPPO Reno6" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  OPPO Reno6
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      oppo
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.1a413a49J0ZnLv" data-mce-fragment="1">[New] OPPO Reno6 5...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱26,999.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/realme-7">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/realme 7.png" alt="realme 7" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  realme 7
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      Realme
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.335e3f01Ry73ul" data-mce-fragment="1">realme 7 [8GB RAM ...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱11,990.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/realme-8-5g">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/realme-8-5g .png" alt="Realme 8 5G" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  Realme 8 5G
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      Realme
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i2.75f85132t4dhyS" data-mce-fragment="1">Realme 8 5G [8GB R...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱11,590.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/realme-c11">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/realme c11.png" alt="realme C11" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  realme C11
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      Realme
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.56ab7739Iu09Bt" data-mce-fragment="1">realme C11 2021 (2...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱4,089.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/realme-gt-5g">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/realme-GT-5g.png" alt="Realme Gt 5g" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  Realme Gt 5g
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      Realme
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i1.7c1f1be3xMb4t7" data-mce-fragment="1">Realme GT 5G Smart...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱22,599.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/realme-narzo-50a">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/realme narzo 50A.png" alt="realme Narzo 50A" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  realme Narzo 50A
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      Realme
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.31c578d7RveN5g" data-mce-fragment="1">realme Narzo 50A [...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱6,990.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/realme-8i">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/realme-8i.png" alt="Realme-8i" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  Realme-8i
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      Realme
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.a3af44a0v1k4vz" data-mce-fragment="1">realme 8i Helio G9...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱10,599.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/samsung-g-m32">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection//samsung G-M32.png" alt="Samsung G M32" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  Samsung G M32
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      Samsung
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.67257310ZKSquX" data-mce-fragment="1">Samsung Galaxy M32...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱13,490.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/samsung-galaxy-a22">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection//Samsung Galaxy A22.png" alt="Samsung Galaxy A22" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  Samsung Galaxy A22
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      Samsung
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.7eb939fcrIt5k1" data-mce-fragment="1">Samsung Galaxy A22...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱11,680.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/samsung-galaxy-a32">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/Samsung Galaxy A32.png" alt="Samsung Galaxy A32" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  Samsung Galaxy A32
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      Samsung
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.3c1e7d52beMKYg" data-mce-fragment="1">Samsung Galaxy A32...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱12,990.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/samsung-galaxy-m12">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/Samsung-G-M12.png" alt="Samsung Galaxy M12" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  Samsung Galaxy M12
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      Samsung
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.127517b0mjmZOt" data-mce-fragment="1">Samsung Galaxy M12...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱7,490.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/samsung-galaxy-m52">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/Samsung Galaxy M52.png" alt="Samsung Galaxy M52" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  Samsung Galaxy M52
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      Samsung
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-mce-fragment="1">Samsung Galaxy M52 5G [8GB RAM + 128GB ROM]</p>
                      
                  </div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱22,990.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/samsung-galaxy-s20">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/Samsung Galaxy S20.png" alt="Samsung Galaxy S20" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  Samsung Galaxy S20
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      Samsung
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.64363aadP4AVhI" data-mce-fragment="1">Samsung Galaxy S20...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱20,590.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/samsung-galaxy-s21">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/Samsung Galaxy S21.png" alt="Samsung Galaxy S21" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  Samsung Galaxy S21
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      Samsung
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.6ca55393swrlaV" data-mce-fragment="1">Samsung Galaxy S21...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱47,990.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/vivo-y20s">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/vivo-y20s.png" alt="vivo Y20s" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  vivo Y20s
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      vivo
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <span data-mce-fragment="1">vivo Y20s G, 6GB+128GB, Helio G80, 5000mAh, 18W Fast Charge, Side Fingerprint, Gaming Smart phone</span>
                      
                  </div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱9,999.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/vivo-v7">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/vivo 12A.png" alt="Vivo y12a" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  Vivo-v7
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                      vivo
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <span data-mce-fragment="1">vivo Y12A, 3GB+32GB, Qualcomm Snapdragon 439, 5000mAh, Side Fingerprint, AI Dual Camera</span>
                      
                  </div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱6,499.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  

  
      

      <li class="product-item col pb-5 text-center">
          
          <!-- Product Image -->
          <a class="d-block text-decoration-none" href="/collections/all/products/xiaomi-redmi-10">
              
              
              <img class="product-item-img img-fluid mb-3 img-thumbnail" src="img/mobile_collection/xiaomi remi 10.png" alt="Xiaomi Redmi 10" width="480" height="480" loading="lazy">
                  
              <!-- Product Title -->
              <h3 class="product-item-title h6 mb-1">
                  Xiaomi Redmi 10
              </h3>

              <!-- Product Vendor -->
              
                  <p class="product-item-vendor text-muted small text-uppercase mb-1">
                     Xiaomi
                  </p>
              

              <!-- Product Description -->
              
                  <div class="product-item-description rte mb-0 text-body small">
                      
                          <p class="pdp-mod-product-badge-title" data-spm-anchor-id="a2o4l.pdp_revamp.0.i0.7d5f4f32IfyUjL" data-mce-fragment="1">Xiaomi Redmi 10 Sm...
                      
                  </p></div>
              

              <!-- Product price -->
              
                  <p class="product-item-price mb-1">
                      
                      <span class="price">
                          
                          ₱7,790.00
                      </span>
                  </p>
              

              <!-- Sold-out badge -->
              

              <!-- Sale badge -->
              

          </a>

      </li>
  


</ul>
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