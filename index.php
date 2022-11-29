<?php
session_start();
require_once 'Layouts/header.php';

if(isset($_GET['controller']) && isset($_GET['action'])){
    $controller = $_GET['controller'].'Controller';
    $action = $_GET['action'];

    require_once "Controllers/$controller.php";
    $controller = new $controller();
    $controller->$action();
}else{
    require_once 'Controllers/ProductController.php';
    // $controller = new ProductController();
    $controller->showAll();
}

require_once 'Layouts/footer.php';
?>