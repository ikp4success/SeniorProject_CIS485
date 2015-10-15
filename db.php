<?php
require_once 'vendor/autoload.php';
    $table='clickerapp';
    //check if on openshift
    if ($_SERVER['OPENSHIFT_NAMESPACE']) {
        //connect to mysql in OpenShift
        return $link = new mysqli($_ENV["OPENSHIFT_MYSQL_DB_HOST"], $_ENV["OPENSHIFT_MYSQL_DB_USERNAME"], $_ENV["OPENSHIFT_MYSQL_DB_PASSWORD"], $table)
            or die("Failed to connect to mysql: " . mysqli_error($link));
    }
    else {
        //.env file will contain variables username/pass other sensitive info
        //if on server load .env.production else load your .env.local file
        if (file_exists('.env.production')) { $Dotenv = new Dotenv\Dotenv(__DIR__, '.env.production');}
        else { $Dotenv = new Dotenv\Dotenv(__DIR__, '.env.local');}
        $Dotenv->load();
        //connect to mysql
        return $link = new mysqli(getenv('MYSQL_DB_HOST'), getenv('MYSQL_DB_USERNAME'), getenv('MYSQL_DB_PASSWORD'), getenv('MYSQL_DB_TABLE')) or
        die("Failed to connect to mysql: " . mysqli_error($link));

    }
