 
 <?php
if(!isset($_SESSION['username'])){

    echo "<script>window.open('login.php','_self')</script>";
}
else {
    ?>
 <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php?dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- End Breadcrumbs-->
    <?php include "cards.php";?>
    <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i>Total Number of Orders Every Day
            </div>
            <div class="card-body">
              <canvas id="myBarChart" width="100%" height="150"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Brands Purchase</div>
            <div class="card-body">
              <canvas id="myPieChart" width="100%" height="150"></canvas>
            </div>
        </div>
    </div>
  </div>
<?php }?>