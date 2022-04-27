<?php 
session_start();
if(!isset($_SESSION["username"])){
  print '<script>window.location.assign("login.php");</script>';//redirect to login if session expired
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin ddo-MobileShopcenter</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/ddo_mbc-admin.css" rel="stylesheet">
  <!-- <script src="https://kit.fontawesome.com/b1e255aac3.js" crossorigin="anonymous"></script> -->
  <!--  -->
  <script src="https://cdn.tiny.cloud/1/yybo0k2fa6x6txku08kvhbfpdfyuvhfto4254ral8b9r1t4x/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#editor',
    selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
  });
</script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php include "navbar.php"?>  
      <div class="content-wrapper">
        <div class="container-fluid">
          <?php
                if(isset($_GET['dashboard'])){
                    include("dashboard.php");
                }
                if(isset($_GET['New-Product'])){
                    include("insert_product.php");
                }
                if(isset($_GET['products'])){
                    include("view_products.php");
                }
                if(isset($_GET['delete_product'])){
                    include("delete_product.php");
                }
                if(isset($_GET['edit_product'])){
                    include("edit_product.php");
                }
                if(isset($_GET['insert_p_cat'])){
                    include("insert_p_cat.php");
                }
                if(isset($_GET['view_p_cats'])){
                    include("view_p_cats.php");
                }
                if(isset($_GET['delete_p_cat'])){
                    include("delete_p_cat.php");
                }
                if(isset($_GET['edit_p_cat'])){

                    include("edit_p_cat.php");
                }
                if(isset($_GET['insert_cat'])){

                    include("insert_cat.php");
                }
                if(isset($_GET['view_cats'])){

                    include("view_cats.php");
                }
                if(isset($_GET['delete_cat'])){

                    include("delete_cat.php");
                }
                if(isset($_GET['edit_cat'])){
                    include("edit_cat.php");
                }
                if(isset($_GET['view_customers'])){

                    include("view_customers.php");
                }
                if(isset($_GET['customer_delete'])){
                    include("customer_delete.php");
                }
                if(isset($_GET['view_orders'])){

                    include("view_orders.php");
                }
                if(isset($_GET['order_delete'])){
                    include("order_delete.php");
                }
                if(isset($_GET['view_payments'])){
                    include("view_payments.php");
                }
                if(isset($_GET['payment_delete'])){
                    include("payment_delete.php");
                }
                if(isset($_GET['insert_user'])){
                    include("insert_user.php");
                }
                if(isset($_GET['view_users'])){
                    include("view_users.php");
                }
                if(isset($_GET['user_delete'])){
                    include("user_delete.php");
                }
                if(isset($_GET['user_profile'])){
                    include("user_profile.php");
                }
            ?>
            
        <!-- <div class="card-footer small text-muted text-center">Updated at <?php echo "12:am";?></div> -->
          </div><!-- end container-fluid-->
              <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
      </div><!-- end content-wrapper-->
    <footer class="sticky-footer">
        <div class="bg-dark  text-primary text-center">
          <small>Copyright © ddo-MobileShopCenter 2022 | <a href="login.php">Terms of service</a> & <a href="login.php"> Privacy Policy</a></small>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/ddo_mbc-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/ddo_mbc.min.js"></script>
</body>
</html>
<?php 
}
?>
<?php
if(isset($_GET['logout'])){
  session_start();
  if(session_destroy()) {
    print '<script>window.location.assign("index.php");</script>';//redirect to dashboard
  }
      } ?>