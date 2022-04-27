<?php



if(!isset($_SESSION['username'])){

    echo "<script>window.open('login.php','_self')</script>";

}

else {

    ?>


    <div class="row"><!--  1 row Starts -->

        <div class="col-lg-12" ><!-- col-lg-12 Starts -->
    <!-- breadcrumb Starts -->
        <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php?dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">View Products</li>
        
      </ol> -->
      <!-- End Breadcrumbs-->

        </div><!-- col-lg-12 Ends -->

    </div><!--  1 row Ends -->


    <div class="row" ><!-- 2 row Starts -->

        <div class="col-lg-12" ><!-- col-lg-12 Starts -->

            <div class="panel panel-default" ><!-- panel panel-default Starts -->
                <div class="panel-heading" ><!-- panel-heading Starts -->
                    <!-- List group -->

                    <h3 class="panel-title" ><!-- panel-title Starts -->
                  
                        Products
                        <a class="btn btn-primary btn-sm pull-right" href="/admin?New-Product" role="button">Add Product </a>
                        
                    </h3><!-- panel-title Ends -->
                    <ul class="nav nav-tabs mb-3" id="myTab0" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button
                            class="nav-link active"
                            id="home-tab0"
                            data-mdb-toggle="tab"
                            data-mdb-target="#home0"
                            type="button"
                            role="tab"
                            aria-controls="home"
                            aria-selected="true"
                            >
                            All
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button
                            class="nav-link"
                            id="profile-tab0"
                            data-mdb-toggle="tab"
                            data-mdb-target="#profile0"
                            type="button"
                            role="tab"
                            aria-controls="profile"
                            aria-selected="false"
                            >
                            Active
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button
                            class="nav-link"
                            id="contact-tab0"
                            data-mdb-toggle="tab"
                            data-mdb-target="#contact0"
                            type="button"
                            role="tab"
                            aria-controls="contact"
                            aria-selected="false"
                            >
                            Draft
                            </button>
                        </li>
                        </ul>
                        <div class="tab-content" id="myTabContent0">
                        <div
                            class="tab-pane fade show active"
                            id="home0"
                            role="tabpanel"
                            aria-labelledby="home-tab0"
                        >
                        </div>
                        <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
                        
                        </div>
                        <div class="tab-pane fade" id="contact0" role="tabpanel" aria-labelledby="contact-tab0">
                        </div>
                        </div>
                </div><!-- panel-heading Ends -->

                <div class="panel-body" ><!-- panel-body Starts -->
                    
                    <div class="table-responsive" ><!-- table-responsive Starts -->

                        <table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

                            <thead>

                            <tr>
                                <th>Product ID</th>
                                <th>Product Title</th>
                                <th>Product Price</th>
                                <th>Product Description</th>
                                <th>delete</th>
                            </tr>

                            </thead>

                            <tbody>

                            <?php
                            include '../_dbconnection.php';
                            $i = 0;
                            $get_pro = "select * from tbl_products";
                            $run_pro = mysqli_query($conn,$get_pro);

                            while($row_pro=mysqli_fetch_array($run_pro)){
                                $pro_id = $row_pro['product_id'];
                                $pro_title = $row_pro['product_name'];
                                $pro_price = $row_pro['product_price'];
                                $pro_cat = $row_pro['product_cat'];
                                $pro_description = $row_pro['product_details'];
                                $i++;

                                ?>

                                <tr>

                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $pro_title; ?></td>
                                    <td>₱ <?php echo $pro_price; ?></td>
                                    <td> <?php echo $pro_description; ?> </td>
                                    <td>
                                        <a href="/admin?delete_product=<?php echo $pro_id; ?>">
                                            <i class="fa fa-trash-o"> </i>
                                        </a>
                                    </td>
                                </tr>

                            <?php } ?>


                            </tbody>


                        </table><!-- table table-bordered table-hover table-striped Ends -->

                    </div><!-- table-responsive Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->




<?php } ?>