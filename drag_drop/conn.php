<?php
	$conn = mysqli_connect('localhost', 'root', '', 'db_drag');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>