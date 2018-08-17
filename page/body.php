<?php
/**
 * Created by PhpStorm.
 * User: nhoxk
 * Date: 8/15/2018
 * Time: 11:57 AM
 */switch ($page){
    case ('home'):
        include_once ('page/pHome.php');
        break;
    case ('about'):
        include_once ('page/pAbout.php');
        break;
    case ('contact');
        include_once ('page/pContact.php');
        break;
    case('signin'):
        include_once ('page/pLogin.php');
        break;
    default;
        include_once ('page/error404.php');
}