<?php
	session_start();

	include "db.php";

	$reg_username = $_POST["reg_username"];
	$reg_passw = md5($_POST["reg_password"]);

	$sql = "SELECT * FROM users WHERE reg_username = \"$reg_username\" and reg_password = \"$reg_passw\"";

	$result =$link->query($sql);

	if($result->num_rows == 0) {
	  echo '<a href="login.php">Error: cannot find user</a>';
	  exit;
	}

	if($result->num_rows > 0) {
	  $_SESSION["login"] = "OK";
	  $_SESSION["reg_username"] = $reg_username;
	  
	  
	  $row = $result->fetch_assoc();
	  	  
	  if($row["admin_yn"] == 'Y') {
		$_SESSION["teacher_id"] = $row["id"];
		$redirect = "admin_home.php";
	  }
	  else {
		$_SESSION["student_id"] = $row["id"];  
		$redirect = "student_home.php";
	  }
	}
	else
	 echo '<a href="login.php">Username or Password does not Exist ---click to go back to login</a>';
	 
	 //$redirect = "login.php";

	// mysql_free_result($result);
	// mysql_close($link);

	header("Location: $redirect");


?>