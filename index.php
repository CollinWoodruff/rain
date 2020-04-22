<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 4/22/2020
 * Time: 2:14 PM
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

//instantiates the autoload file
require_once ('vendor/autoload.php');

//default route
$f3->route('Get /', function ()
{
    //echo <h1>its raining today</h1>

    $view = new Template();
    echo $view->render('views/home.html');
});

//Run $f3
$f3->run();