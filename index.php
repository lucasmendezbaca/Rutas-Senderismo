<?php
session_start();
require_once 'layouts/header.php';
require_once 'views/NuevaRuta.php';

// if(isset($_GET['controller']) && isset($_GET['action'])){
//     $controller = $_GET['controller'].'Controller';
//     $action = $_GET['action'];

//     require_once "controllers/$controller.php";
//     $controller = new $controller();
//     $controller->$action();
// }else{
//     require_once 'controllers/ProductController.php';
//     // $controller = new ProductController();
//     $controller->showAll();
// }

require_once 'layouts/footer.php';
?>