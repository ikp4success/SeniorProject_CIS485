<?php
	session_start();
	include "db.php";
	$qa_seqno = $question = $correct = $a1 = $a2 = $a3 = $a4 = "";

	if(isset($_POST["seqno"])) {
		$qa_seqno = $_POST["seqno"];
	}
	
	if(isset($_POST["question"])) {
		//$question = $_POST["question"];
		$question = mysqli_real_escape_string($link, $_POST["question"]);
	}
	
	if(isset($_POST["correct"])) {
		$correct = $_POST["correct"];
	}
	
	if(isset($_POST["a1"])) {
		$a1 = mysqli_real_escape_string($link, $_POST["a1"]);
	}
	
	if(isset($_POST["a2"])) {
		$a2 = mysqli_real_escape_string($link, $_POST["a2"]);
	}
	
	if(isset($_POST["a3"])) {
		$a3 = mysqli_real_escape_string($link, $_POST["a3"]);
	}
	
	if(isset($_POST["a4"])) {
		$a4 = mysqli_real_escape_string($link, $_POST["a4"]);
	}
	echo "seqno has $qa_seqno";
	
	$sql = "UPDATE questions_answers SET question = '$question', a1 = '$a1', a2 = '$a2', a3 = '$a3', a4 = '$a4', correct = '$correct' WHERE qa_seqno = '$qa_seqno'";
	
	$result = $link->query($sql);
	
	if($result == false) {
		echo "DB FAIL: Unable to execute query";
		exit;
	}
	else {
		header("Refresh:0; url=edit_qa.php");
		exit;
	}
	
?>