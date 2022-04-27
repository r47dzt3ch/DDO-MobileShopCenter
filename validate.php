<?php

include_once('_dbconnection.php');
function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$email = test_input($_POST["email"]);
	$password = test_input($_POST["pass"]);
	$stmt = $conn->prepare("SELECT * FROM tbl_users");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['email'] == $email) &&
			($user['pass'] == $password)) {
				header("Location: index.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			header("Location: login.php");

		}
	}
}

?>
