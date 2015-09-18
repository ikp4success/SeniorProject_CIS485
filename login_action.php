<?php
session_start();

include "db.php";

$reg_username = $_POST["reg_username"];

$reg_passw = $_POST["reg_password"];
$sql = "SELECT reg_username, reg_password FROM student_users WHERE reg_username = '$reg_username' and reg_password = md5('$reg_passw')";
$result =$link->query($sql);

if($result == false) {
    echo '<a href="login.php">Error: cannot execute query</a>';
    exit;
}

$num_rows = mysqli_num_rows($result);
if($num_rows == 1) {
    $_SESSION["login"] = "OK";
    $_SESSION["reg_username"] = $reg_username;
    $redirect = "student_home.php";

}
else
    echo '<a href="login.php"> Username or Password does not Exist ---click to go back to login</a>';
//$redirect = "login.php";

// mysql_free_result($result);
// mysql_close($link);

header("Location: $redirect");


?>