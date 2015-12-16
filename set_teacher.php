<?php
	session_start();
	include "db.php";
	
	if(isset($_GET['value'])) {
		$_SESSION["my_teacher"] = $_GET['value'];
		header("Refresh:0; url=student_home.php");
	}
	else 
		header("Refresh:0; url=student_home.php");
?>