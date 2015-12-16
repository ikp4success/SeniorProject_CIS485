<?php
	include "db.php";
	session_start();
   $my_current_q=$_SESSION["my_current_q"];

	$teacher_id = $_SESSION["my_teacher"];
	$set_no = $_SESSION["set_no"]; 
	$stu_id = $_SESSION["student_id"];
	$stu_fname = $_SESSION["reg_username"];
	$stu_ans = array(); // 
	$stu_qno = array(); //
	$correct = array(); //
	$correct_yn = array();

	$maxI = $_SESSION["inum"];
	
	for($i = 0; $i < $maxI; $i++) {
		$stu_qno[$i] = $_SESSION["q_no".$i];
		$correct[$i] = $_SESSION["correct".$i];
		$stu_ans[$i] = $_POST["ans".$i];
		
		if($stu_ans[$i] == $correct[$i]) 
			$correct_yn[$i] = "Y";
		else
			$correct_yn[$i] = "N";
		
	}


	if ($_POST["live_mode"] != 1) {

	$j = 0;
	while ($j < $maxI) {

		$sql = "INSERT INTO poll_results (teacher_id, set_no, q_no, stu_id, stu_fname, response, correct_yn)
		VALUES('$teacher_id', '$set_no', '$stu_qno[$j]', '$stu_id', '$stu_fname', '$stu_ans[$j]', '$correct_yn[$j]')";

		$result = $link->query($sql);
		if ($result == false) {
			echo '<a href="register.php">Error: cannot execute query</a>';
			break;
		}
		$j++;
	}
}
else if($_POST["live_mode"] == 1){
	$correct[0]=$_SESSION["correct" . $my_current_q];
	$stu_ans[0] = $_POST["ans".$my_current_q];

	$correct_yn[0]=($stu_ans[0] == $correct[0])?"Y":"N";

	$sql = "INSERT INTO poll_results (teacher_id, set_no, q_no, stu_id, stu_fname, response, correct_yn)
		VALUES('$teacher_id', '$set_no', '$my_current_q', '$stu_id', '$stu_fname', '$stu_ans[0]', '$correct_yn[0]')";
	
	$result = $link->query($sql);
	if ($result == false) {
		echo '<a href="register.php">Error: cannot execute query</a>';
		exit;
	}
	$my_current_q=$_SESSION["my_current_q"] +=1;

	header("Location: student_question.php");
	exit;
	}
else
	//success message only on full completions else refresh page!
    echo "<SCRIPT> alert('Submited Questions Succesfully'); </SCRIPT>";
    header("Location: submit_question.php");
	exit;
?>