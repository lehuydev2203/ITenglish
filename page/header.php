<?php
/**
 * Created by PhpStorm.
 * User: nhoxk
 * Date: 8/15/2018
 * Time: 11:29 AM
 */
$page='home';
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title><?php
        switch ($page){
            case ('home'):
                echo 'Home';
                break;
            case ('about'):
                echo 'About';
                break;
            case ('contact');
                echo 'Contact';
                break;
            case('signin'):
                echo 'Sign In';
                break;
            default;
                echo 'Error 404 : Not ID';
        }
        ?></title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
    <!-- development version, includes helpful console warnings -->
</head>
<body >
    <header>
        <div id="menu" >
            <div id="headerbg"></div>
            <div align="left" id="ic-menu">
                <input type="checkbox" id="checkbox" onclick="menu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav id="sidebarMenu">
                <ul>
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=about">About</a></li>
                    <li><a href="index.php?page=contact">Contact</a></li>
                    <li><a href="index.php?page=signin">Sign In</a></li>
                </ul>
            </nav>
        </div>
    </header>


