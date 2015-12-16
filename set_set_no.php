<?php
	session_start();
	$_SESSION["my_current_q"] = 1;
	if(isset($_POST["set_no"])) {
		$_SESSION["set_no"] = $_POST["set_no"];
		$redirect = "Location: student_question.php";
	}
	else
		$redirect = "Location: student_home.php";
	
	header($redirect);

?>