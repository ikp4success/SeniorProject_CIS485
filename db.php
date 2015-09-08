<?php
$link = mysql_connect("mysql5.000webhost.com" , "a2199089_CIS485", "12345_CIS485");

if($link == false) {
  echo "Error: can't connect to database server";
  exit;
}

if(mysql_select_db("a2199089_CIS485", $link) == false) {
  echo "Error: can't connect to database";
  exit;
}
?>
