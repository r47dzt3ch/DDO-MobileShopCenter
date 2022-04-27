  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/admin?dashboard">DDO-MobileShopCenter</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="/admin?dashboard">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <!-- Orders -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="#">
          <i class="fa fa-shopping-cart"></i>
            <span class="nav-link-text">Orders</span>
          </a>
        </li>
        <!-- Products -->
        <li class="nav-item" data-toggle="collapse" data-placement="right"  data-target="#products" title="Products">
          <a class="nav-link" href="/admin?products">
          <i class="fa fa-tag"></i>
            <span class="nav-link-text">Products</span>
          </a>
        </li>
        <li>
        <!-- li Starts -->
        <li class="nav-item" data-toggle="collapse" data-placement="right"  data-target="#p_cat" title="Products Categories">
         <a class="nav-link" href="#">
          <i class="fa fa-fw fa-pencil"></i>
          <span class="nav-link-text">Products Categories</span> 
          <!-- <i class="fa fa-fw fa-caret-down"></i> -->
        </a>
            <ul id="p_cat" class="collapse">
                <li>
                    <a href="index.php?view_p_cats"> View Products Categories </a>
                </li>
                <li>
                    <a href="index.php?insert_p_cat"> Insert Product Category </a>
                </li>

            </ul>
            </li>
            <!-- li Ends -->
            <!-- li Starts -->
            <!-- <li>
            <a href="#" data-toggle="collapse" data-target="#cat">
                <i class="fa fa-fw fa-arrows-v"></i> Categories
                <i class="fa fa-fw fa-caret-down"></i>
            </a>
            <ul id="cat" class="collapse">
                <li>
                    <a href="index.php?insert_cat"> Insert Category </a>
                </li>
                <li>
                    <a href="index.php?view_cats"> View Categories </a>
                </li>
            </ul>
            </li>list Ends -->
 
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="register.php">
            <i class="fa fas fa-user"></i>
            <span class="nav-link-text">Users</span>
          </a>
        </li>
      </ul>


      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Mark Bello</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small"></div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>

      <!-- <li class="dropdown" >dropdown Starts -->
         <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" >dropdown-toggle Starts -->
        <!-- <i class="fa fa-user" ></i> -->
        <!-- <?php //echo $_SESSION["admin_name"]; ?> <b class="caret" ></b> -->
      <!-- </a></li>dropdown-toggle Ends -->
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="index.php?logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
