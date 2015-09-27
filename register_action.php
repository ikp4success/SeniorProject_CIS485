<?php
include "db.php";
session_start();

$reg_username = $_POST["reg_username"];
$reg_email = $_POST["reg_email"];
$reg_password = md5($_POST["reg_password"]);
$reg_password_confirm = md5($_POST["reg_password_confirm"]);
$reg_fullname = $_POST["reg_fullname"];
$reg_gender = $_POST["reg_gender"];
//input checks


if ($reg_password != $reg_password_confirm) {
  echo '<a href="register.php">Error: password does not match. Try again!</a>';
  exit;
}



$link=connectDb('cis485');
/*
$verf_link=
// using SendGrid's PHP Library - https://github.com/sendgrid/sendgrid-php
$sendgrid = new SendGrid($api_user, $api_key);
$email    = new SendGrid\Email();

$email->addTo($email)
    ->setFrom("csuclicker@DoNotReply.com")
    ->setSubject("You'r accapted to CSU-Clicker")
    ->setHtml("Hi $reg_fullname /n got to $verf_link");

$sendgrid->send($email);
*/
$sql = "INSERT INTO student_users (reg_username, reg_fullname, reg_gender, reg_email, reg_password)
        VALUES('$reg_username', '$reg_fullname','$reg_gender','$reg_email', '$reg_password' )";

$result = $link->query($sql);


if($result === false)
  echo '<a href="register.php">Error: cannot execute query</a>';
else
  header("Location: login.php");

//mysql_close($link);
exit;
?>
