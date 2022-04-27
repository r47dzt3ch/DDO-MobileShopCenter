<?php
	require_once '../_dbconnection.php';
	date_default_timezone_set('Asia/Manila');
 
	if($_FILES){
		$file_name = $_FILES['image']['name'];
		$file_temp = $_FILES['image']['tmp_name'];
		$file_size = $_FILES['image']['size'];
 
		if($file_size < 2000000){
			$file = explode('.', $file_name);
			$end = end($file);
			$allowed_ext = array('jpg', 'jpeg', 'png');
 
			if(in_array($end, $allowed_ext)){
				$name = date("Ymd").time();
				$location = 'upload/'.$name.".".$end;
				if(move_uploaded_file($file_temp, $location)){
					mysqli_query($conn, "INSERT INTO `image` VALUES('', '$name', '$location')") or die(mysqli_error());
					echo "success";
				}
			}else{
				echo "error1";
			}
		}else{
			echo "error2";
		}
	}
 
 
?>
