<?php
require_once 'vendor/autoload.php';


if ($_SERVER['OPENSHIFT_NAMESPACE']) {
    //connect to mysql in OpenShift
    $link = new mysqli($_ENV["OPENSHIFT_MYSQL_DB_HOST"], $_ENV["OPENSHIFT_MYSQL_DB_USERNAME"], $_ENV["OPENSHIFT_MYSQL_DB_PASSWORD"], 'csucis485') or
    die("Failed to connect to mysql: " . mysqli_error($link));

} else {
    //.env file will contain variables username/pass other sensitive info
    //if on server load .env.production else load your .env.local file
    if (file_exists('.env.production')) {
        $Dotenv = new Dotenv\Dotenv(__DIR__, '.env.production');
    } else {
        $Dotenv = new Dotenv\Dotenv(__DIR__, '.env.local');
    }
    $Dotenv->load();

    //----------------------------------------------------------------------
    //connect to mysql
    $link = new mysqli(getenv('MYSQL_DB_HOST'), getenv('MYSQL_DB_USERNAME'), getenv('MYSQL_DB_PASSWORD_CIS'), getenv('DBTABLE_CIS')) or
    die("Failed to connect to mysql: " . mysqli_error($link));


}

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