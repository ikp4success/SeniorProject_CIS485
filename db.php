// <?php
// $link = mysql_connect("mysql5.000webhost.com" , "a2199089_CIS485", "12345_CIS485");

// if($link == false) {
//   echo "Error: can't connect to database server";
//   exit;
// }

// if(mysql_select_db("a2199089_CIS485", $link) == false) {
//   echo "Error: can't connect to database";
//   exit;
// }
// ?>


<?php
// $link = mysql_connect("localhost" , "a2199089_CIS485", "asdf12345");
$link = new mysqli("mysql5.000webhost.com","a2199089_CIS485","12345_CIS485","a2199089_CIS485");

// if($link == false) 
if($link->connect_error){
  //echo "Error: can't connect to database server";
  die("Connection failed: ". $link->connect_error);
  //exit;
}

// if(mysql_select_db("imgeorge", $link) == false) {
//   echo "Error: can't connect to database";
//   exit;
// }

?>
