<?php
session_start();
require_once 'views/layouts/header.php';
require_once 'config/autoload.php';

if(isset($_GET['controller']) && isset($_GET['action'])){
    $controller = $_GET['controller'].'Controller';
    $action = $_GET['action'];
    
    if(class_exists($controller)){
        $controller = new $controller();
        if(method_exists($controller, $action)){
            $controller->$action();
        }else{
            echo "La acción no existe";
        }
    }else{
        echo "El controlador no existe";
    }

}else{
    $controller = new RutaController();
    $controller->showAll();
}

require_once 'views/layouts/footer.php';
?>