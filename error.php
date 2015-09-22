<?php

switch($_SERVER["REDIRECT_STATUS"]){
    case 400:
        $title = "400 Bad Request";
        $description = "The request can not be processed due to bad syntax";
        break;

    case 401:
        $title = "401 Unauthorized";
        $description = "The request has failed authentication";
        break;

    case 403:
        $title = "403 Forbidden";
        $description = "The server refuses to response to the request";
        break;

    case 404:
        $title = "404 Not Found";
        $description = "The resource requested can not be found.";
        break;

    case 500:
        $title = "500 Internal Server Error";
        $description = "There was an error which doesn't fit any other error message";
        break;

    case 502:
        $title = "502 Bad Gateway";
        $description = "The server was acting as a proxy and received a bad request.";
        break;

    case 504:
        $title = "504 Gateway Timeout";
        $description = "The server was acting as a proxy and the request timed out.";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php $title?>">

    <title><?php $title?></title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/components/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link href='css/style.css' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

        body {align-content: center;background-color:lightslategray}
        h1   {font-family: Lora; color:white}
        h3    {color:azure}
    </style>
</head>
<body>
        <h1><?php $title?></h1>
        <h3><?php $description?></h3>
</body>
</html>
