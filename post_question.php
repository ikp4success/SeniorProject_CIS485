<?php
	session_start();
	include "db.php";
	
	$teacher_id = $correct = $question = $answer1 = $answer2 = $answer3 = $answer4 = "";
	$q_no = $set_no = 0;
	
	if(isset($_SESSION["teacher_id"]))
		$teacher_id = $_SESSION["teacher_id"];
	
	if(isset($_POST["set_no"]) && is_numeric($_POST["set_no"])) {
		$_SESSION["set_no"] = $_POST["set_no"];
		$set_no = intval($_POST["set_no"]);
	}
	
	$qsql = "SELECT MAX(q_no) AS high FROM questions_answers WHERE set_no = '$set_no' AND teacher_id = '$teacher_id'";
	
	$qresult = $link->query($qsql);
	if($qresult->num_rows > 0) {
		$row = $qresult->fetch_assoc();
		$temp = $row["high"];
		$q_no = intval($temp) + 1;
		$_SESSION["q_no"] = $q_no + 1;
	}
	else {
		$q_no = 1;
		$_SESSION["q_no"] = $q_no + 1;
	}
	
	
	$sql = "INSERT INTO questions_answers(teacher_id, set_no, q_no, correct, question, a1, a2, a3, a4) VALUES('$teacher_id', '$set_no', '$q_no'";
	
	if (isset($_POST["correct"]) && !empty($_POST["correct"])) {
		$correct = $_POST["correct"];
		$sql .= ",'$correct'";
	}
	else
		$sql .= ",'$correct'";
	
	if (isset($_POST["question"]) && !empty($_POST["question"])) {
		$question = $_POST["question"];
		$sql .= ",'$question'";
	}
	else
		$sql .= ",'$question'";
	
	if (isset($_POST["multi-choices"]) && !empty($_POST["multi-choices"])) {
		$answer1 = $_POST["multi-choices"];
		$sql .= ",'$answer1'";
	}
	else
		$sql .= ",'$answer1'";
	
	if (isset($_POST["multi-choices2"]) && !empty($_POST["multi-choices2"])) {
		$answer2 = $_POST["multi-choices2"];
		$sql .= ",'$answer2'";
	}
	else
		$sql .= ",'$answer2'";
	
	if (isset($_POST["multi-choices3"]) && !empty($_POST["multi-choices3"])) {
		$answer3 = $_POST["multi-choices3"];
		$sql .= ",'$answer3'";
	}
	else
		$sql .= ",'$answer3'";
	
	if (isset($_POST["multi-choices4"]) && !empty($_POST["multi-choices4"])) {
		$answer4 = $_POST["multi-choices4"];
		$sql .= ",'$answer4'";
	}
	else
		$sql .= ",'$answer4'";
	
	$sql .= ")";
	
	$result = $link->query($sql);
	
	if($result == false)
	  echo '<a href="register.php">Error: cannot execute queryo</a>';
	else
	  header("Refresh:0; url=questions.php");
	

	

?>