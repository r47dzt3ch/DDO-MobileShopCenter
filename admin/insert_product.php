<?php

if(!isset($_SESSION['username'])){

    echo "<script>window.open('login.php','_self')</script>";

}

else {
    $product_title="";

if (isset($_POST['save_products'])) {
    $product_title = $_POST['product_title'];
// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(!empty($_FILES["image"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
            // Insert image file name into database
            // $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
     } 
    // $product_cat = $_POST['product_cat'];
    // $sub_cat = $_POST['sub_cat'];
    // $base_price = $_POST['product_base_price'];
    // $product_desc = $_POST['product_desc'];
    // $product_varient=$_POST['product_variant'];
    // $price_change=$_POST['price_change'];
    # code...
}
    ?>
            <div class="panel panel-default"><!-- panel panel-default Starts -->
                <div class="panel-heading"><!-- panel-heading Starts -->
                    <h3 class="panel-title">
                    <a class="text-secondary" href="/admin?products"><i class="fa fa-regular fa-arrow-left"></i></a> Add Product
                    </h3>
                </div><!-- panel-heading Ends -->
                <div class="panel-body"><!-- panel-body Starts -->
                <form  method="post" >
                  <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                 <div class="col-md-8 ">
                    <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <input class="form-control"  type="text"  name="product_title" required>
                        <h5 class="card-title mt-4">Description</h5>
                        <textarea class="form-control"id="editor" name="product_desc"><?php echo $product_title;?></textarea>
                    </div>
                    </div>
                    <br>
                    <div class="card mb-4" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">Media</h5>
                                <hr style="border-top:1px dotted #ccc;"/>
                            <div id="col-md-12 well" class="text-center">
                            <input type="file" name="image">
                            <div id="drop-zone">
                            <img src="<?php echo $fileType;?>" alt="My image">
                            </div>
                        </div>
                    </div>
                    </div>
                    <br>
                </div>  
                <div class="col-md-4 ">
                <div class="card mb-4" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">Product Status</h5>
                                <hr style="border-top:1px dotted #ccc;"/>          
                        </div>
                    </div>
                    <div class="card mb-4" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">Pricing</h5>
                                <hr style="border-top:1px dotted #ccc;"/>
                                <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                         <span class="">Price</span>
                                         <input class="form-control"  type="text"  name="product_price">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                         <span class="">Price</span>
                                         <input class="form-control"  type="text"  name="product_price">
                                    </div>
                                </div>
                                </div>

                           
   
                        </div>
                    </div>


                </div>
</div>
                
                
            
            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
            <button type="submit" class="btn btn-primary btn-block" name="save_products">Save</button>
            </div>
                </form>
            </div>  <!-- panel-body Ends -->
        </div>  
  
       
        
<?php } ?>
