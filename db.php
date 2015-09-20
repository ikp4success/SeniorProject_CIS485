<?php
require_once 'vendor/autoload.php';

//connect to mysql in OpenShift
$link = new mysqli($_ENV["OPENSHIFT_MYSQL_DB_HOST"], $_ENV["OPENSHIFT_MYSQL_DB_USERNAME"], $_ENV["OPENSHIFT_MYSQL_DB_PASSWORD"], 'csucis485' ) or
        die("Failed to connect to mysql: " . mysqli_error($link));

//if connection fails display error and exit
// if($link == false)
//if($link->connect_error){
  //echo "Error: can't connect to database server";
 // die("Connection failed: ". $link->connect_error);
  //exit;
//}

// if(mysql_select_db("imgeorge", $link) == false) {
//   echo "Error: can't connect to database";
//   exit;
// }

?>