<?php
session_start();
require_once './vendor/autoload.php';
require_once "./app/Core/App.php";
require_once "./app/Core/Controller.php";
require_once "./app/Core/Database.php";
$config = require_once "./app/Config/Config.php";

App::setConfig($config);

$myApp = new App(); 
$myApp->run();
?>