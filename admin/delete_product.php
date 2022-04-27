<?php



if(!isset($_SESSION['username'])){

    echo "<script>window.open('login.php','_self')</script>";

}

else {

    ?>

    <?php

    if(isset($_GET['delete_product'])){
        include '../_dbconnection.php';
        $delete_id = $_GET['delete_product'];
        $delete_pro = "delete from tbl_products where product_id='$delete_id'";
        $run_delete = mysqli_query($conn,$delete_pro);
        if($run_delete){
            echo "<script>alert('One Product Has been deleted')</script>";
            echo "<script>window.open('/admin?products','_self')</script>";
        }
    }

    ?>

<?php } ?>