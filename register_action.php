<?php 
$reg_username = $_POST["reg_username"];
$reg_email = $_POST["reg_email"];
$reg_password = md5($_POST["reg_password"]);
$reg_password_confirm = md5($_POST["reg_password_confirm"]);
$reg_fullname = $_POST["reg_fullname"];
$reg_gender = $_POST["reg_gender"];


if ($reg_password != $reg_password_confirm) {
  echo '<a href="register.php">Error: password does not match. Try again!</a>';
  exit;
}

include "db.php";

$sql = "INSERT INTO student_users (reg_username, reg_email, reg_password, reg_fullname, reg_gender) 
VALUES('$reg_username', '$reg_email', '$reg_password', '$reg_fullname', '$reg_gender');";
$result = mysql_query($sql, $link);

if($result == false)
  echo '<a href="register.php">Error: cannot execute query</a>';
else
  header("Location: private.php");

mysql_close($link);
exit;
?>
