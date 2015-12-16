<?php
include "db.php";
	session_start();

	//if cookie expires/not login teacher_id will be zero or null
	//need to check this before inserting data
	if (!isset($_SESSION["teacher_id"])) {
		header("Refresh:0; url=login.php");
		exit;
	}
	if (isset($_POST["set_no"]) && !empty($_POST["set_no"])) {
		$_SESSION["set_no"] = $_POST["set_no"];
		update_q($link,"questions.php");
	}

	function update_q($link,$url)
	{

		if (is_numeric(intval($_SESSION['set_no']))) {
			$sql = "SELECT MAX(q_no) AS high, live_mode, timeOut FROM questions_answers
      WHERE set_no = \"" . $_SESSION['set_no'] . "\" AND teacher_id = \"" . $_SESSION["teacher_id"] . "\"";

			$result = $link->query($sql);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$_SESSION["q_no"] = intval($row["high"]) + 1;
				
			} else {
				$_SESSION["q_no"] = 1;
			}
		}
		if(isset($url)){
			header("Refresh:0; url=$url");
		}
	}



	
