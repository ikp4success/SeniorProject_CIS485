<?php
	session_start();

	include "db.php";

	$reg_username = $_POST["reg_username"];
	$reg_passw = md5($_POST["reg_password"]);
	
	$sql = "SELECT * FROM users WHERE reg_username = '$reg_username' and reg_password = '$reg_passw'";
	$result =$link->query($sql);

	if($result == false) {
	  echo mysqli_error($link);
	  exit;
	}

	if($result->num_rows > 0) {
	  $_SESSION["login"] = "OK";
	  $_SESSION["reg_username"] = $reg_username;
	  
	  
	  $row = $result->fetch_assoc();
	  	  
	  if($row["admin_yn"] == 'Y') {		  
                $redirect = "admin_home.php";  
                $_SESSION["teacher_id"] = $row["id"];
	  }
	  else
		$redirect = "student_home.php";
          
          header("Location: $redirect");
	}
	else
            echo '<a href="login.php">Username or Password does not Exist ---click to go back to login</a>';
	 
	 //$redirect = "login.php";

	// mysql_free_result($result);
	// mysql_close($link);
?>