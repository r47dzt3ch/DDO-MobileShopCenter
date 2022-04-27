<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "db_ddo_mobilechopcenter";
	$username = "root";
	$password = "";

  $conn = new mysqli($servername,	$username,$password ,$dbname);
  if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }
}
catch(Exception  $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
