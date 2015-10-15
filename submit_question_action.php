<?php 
	session_start();
	$stu_fname = $_SESSION["reg_username"];
	$stu_ans = $_POST["student_ans"];
	$stu_qno = $_POST["q_no"];
	$correct = $_POST["correct"];
	$set_no = $_POST["set_no"];
	$stu_id = "NULL";

	
	include "db.php";
	
	$sql = "INSERT INTO poll_results (set_no, q_no, stu_id, stu_fname, response, correct_yn)
	VALUES($set_no, $stu_qno, $stu_id, '$stu_fname', '$stu_ans', $correct)";
	$result = $link->query($sql);

	if($result == false)
	  echo '<a href="register.php">Error: cannot execute query</a>';
	else {
	  echo "<SCRIPT> alert('Submited Questions Succesfully'); </SCRIPT>";
	  header("Location: submit_question.php");
	}
	//mysql_close($link);
	exit;
?>