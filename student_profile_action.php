<?php
include "db.php";
session_start();
$reg_user = $_SESSION['reg_username'];
$l_name = $_POST["l_name"];
$f_name = $_POST["f_name"];
$reg_email = $_POST["reg_email"];




$sql = "UPDATE users
        SET f_name='$f_name', l_name='$l_name', reg_email='$reg_email'
        WHERE reg_username = '$reg_user'";

stripslashes($sql);
$result = $link->query($sql);


if ($result == false) {

    echo '<a href="private.php">Error: failed to update user profile</a>';
    exit;


}

$redirect = "student_profile.php";

// mysql_free_result($result);
// mysql_close($link);

header("Location: $redirect");
?>