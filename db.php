<?php
//very important line without it, .env will not work
require_once 'vendor/autoload.php';

//.env file will contain variables username/pass other sensitive info
//if on server load .env.production else load your .env.local file
if (file_exists('.env.production')){
    $Dotenv = new Dotenv\Dotenv(__DIR__,'.env.production');
}
else{
    $Dotenv = new Dotenv\Dotenv(__DIR__, '.env.local');
}
$Dotenv->load();


//----------------------------------------------------------------------

//connect to mysql
$link = new mysqli(getenv('mysql_serverName'), getenv('mysql_usernameCIS'), getenv('mysql_passwordCIS'), getenv('dbtable_CIS') ) or
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