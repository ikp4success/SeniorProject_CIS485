<?php 
	session_start();
	$reg_username = $_POST["reg_username"];
	$reg_email = $_POST["reg_email"];
	$reg_password = md5($_POST["reg_password"]);
	$reg_password_confirm = md5($_POST["reg_password_confirm"]);
	$fname = $_POST["reg_fname"];
	$lname = $_POST["reg_lname"];
	$id = $_POST["school_id"];
	$admin_yn = 'N';

	if ($reg_password != $reg_password_confirm) {
	  echo '<a href="register.php">Error: passwords do not match. Try again!</a>';
	  exit;
	}
	
	//$pos = strpos($id, '1');
	$x = $id[0];
	if($x == '1') {
		$admin_yn = 'Y';
	}
	
	
	
	include "db.php";
	
	$sql = "INSERT INTO users (id, reg_username, f_name, l_name, reg_password, admin_yn, reg_email) 
	VALUES('$id', '$reg_username', '$fname', '$lname', '$reg_password', '$admin_yn', '$reg_email')";
	$result = $link->query($sql);

	if($result == false)
	  echo '<a href="register.php">Error: cannot execute query</a>';
	else {
	  echo "<SCRIPT> alert('Registration Successful'); </SCRIPT>";
	  header("Location: login.php");
	}
	//mysql_close($link);
	exit;
?>