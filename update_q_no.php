<?php
	session_start();
	include "db.php";
	
	if(isset($_POST["set_no"]) && is_numeric($_POST["set_no"])) {
		$_SESSION["set_no"] = $_POST["set_no"];
		$set_no = $_POST["set_no"];
		$teacher_id = $_SESSION["teacher_id"];
		$sql = "SELECT MAX(q_no) AS high FROM questions_answers WHERE set_no = '$set_no' AND teacher_id = '$teacher_id'";
		$result = $link->query($sql);
		
		if($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$temp = $row["high"];
			$q_no = intval($temp) + 1;
			$_SESSION["q_no"] = $q_no;
		}
		else {
			$_SESSION["q_no"] = 1;
		}
		
	}
	
	header("Refresh:0; url=questions.php");
	
?>