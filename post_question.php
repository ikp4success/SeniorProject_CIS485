<?php
	session_start();
	include "db.php";

	$MAX_ANSWERS=4;
	$MAX_SET=999;
	$MAX_QUESTIONS_FOR_SET=9999;
	$emptySql=",\"\"";
	$teacher_id = $correct = $question = $answer1 = $answer2 = $answer3 = $answer4 = "";
	$set_no = 0;
	$_SESSION["live_mode"] = (isset($_POST["live_mode"]) && intval($_POST["live_mode"]) == 0)? 0 : 1;
	$_SESSION["timeOut"]= (isset($_POST["set_time_out"]) && intval($_POST["set_time_out"]) > 3)? $_POST["set_time_out"] : 30;

	//if cookie expires/not login teacher_id will be zero or null
	//need to check this before inserting data
	if(!isset($_SESSION["teacher_id"])){
		header("Refresh:0; url=login.php");
		exit;
	}
	//check correct answer number is within range
	if (!(isset($_POST["correct"]) && intval($_POST["correct"]) > 0 && intval($_POST["correct"]) <= $MAX_ANSWERS)) {
		echo '<a href="questions.php">Error: correct answer out of range'.$_POST["correct"].'</a>';
		exit;
	}

	// check set number is correct and within range
	if(isset($_POST["set_no"]) && intval($_POST["set_no"]) > 0 && intval($_POST["set_no"]) <= $MAX_SET) {
			$_SESSION["set_no"] = $_POST["set_no"];
			$set_no = intval($_POST["set_no"]);
			include "update_q_no.php";
			update_q($link);
	}
	else{
		echo '<a href="questions.php">Error: set number is incorrect or out of range: '.$_POST["set_no"].'</a>';
		exit;
	}


/*	$sql = "INSERT INTO questions_answers
		(teacher_id, set_no, q_no, correct, question, a1, a2, a3, a4)
		VALUES(\"".$_SESSION["teacher_id"]."\", \"".$_SESSION["set_no"]."\", \"".$_SESSION["q_no"]."\",\"".$_POST["correct"]."\"";
*/
$sql = "INSERT INTO questions_answers
		(teacher_id, set_no, q_no, live_mode, timeOut, correct, question, a1, a2, a3, a4)
		VALUES(\"".$_SESSION["teacher_id"]."\", \"".$_SESSION["set_no"]."\", \"".$_SESSION["q_no"]."\", \"".$_SESSION["live_mode"]."\",\"".$_SESSION["timeOut"]."\",\"".$_POST["correct"]."\"";

$array = array("question","multi-choices","multi-choices2","multi-choices3","multi-choices4");

	foreach($array as $item){
		if (isset($_POST[$item]) && !empty($_POST[$item])) {
			$sql .= ",\"".$_POST[$item]."\"";
		}
		else
			$sql .= $emptySql;
	}
	$sql .= ")";

	$result = $link->query($sql);
	
	if($result == false)
	  echo '<a href="register.php">Error: cannot execute queryo</a>';
	else
		$_SESSION["q_no"]+=1;
	  	header("Refresh:0; url=questions.php");