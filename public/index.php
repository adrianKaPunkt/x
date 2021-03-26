<?php

require_once 'src/controller.php';

$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$section = $_GET['action'] ?? $_POST['action'] ?? 'index';

phpinfo();

if($section == 'about-us') {

    include 'controller/AboutUsController.php';
    $aboutUsController = new AboutUsController();
    $aboutUsController->runAction($action);

} else if($section == 'contact') {

    include 'controller/ContactController.php';
    $contactController = new ContactController();
    $contactController->runAction($action);

} else {
    
    include 'controller/HomePageController.php';
}