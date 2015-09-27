<?php
include "db.php";

    //get question and answers and correct answer from form
    $question = $_POST["reg_username"];
    $correct = $_POST["correct"];
    $multi_choices1 = $_POST["multi-choices"];
    $multi_choices2 = $_POST["multi-choices2"];
    $multi_choices3 = $_POST["multi-choices3"];
    $multi_choices4 = $_POST["multi-choices4"];

$prof_id = $_SESSION["reg_id"];

$sql =
    "INSERT INTO questions_answers (techer_id, question, a1,a2,a3,a4, correct)
    VALUES('$prof_id', $question', '$multi_choices1','$multi_choices2','$multi_choices3','$multi_choices4','$correct')";

echo $sql;
return $link = new mysqli(getenv('MYSQL_DB_HOST'), getenv('MYSQL_DB_USERNAME'), getenv('MYSQL_DB_PASSWORD_CIS'), 'clickerapp') or
die("Failed to connect to mysql: " . mysqli_error($link));

$result = $link->query($sql);

$num_rows = mysqli_num_rows($result);
if($num_rows == 1) {
    $_SESSION["login"] = "OK";
    $_SESSION["reg_username"] = $reg_username;
    $redirect = "student_home.php";

}
else
    echo '<p>Could not add question!</p>';
//$redirect = "login.php";

// mysql_free_result($result);
// mysql_close($link);

header("Location: $redirect");


?>