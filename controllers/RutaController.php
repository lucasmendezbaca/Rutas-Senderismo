<?php
require_once 'models/RutaManagerModel.php';

class RutaController {
    public function showAll() {
        $rutaManager = new RutaManagerModel();
        $rutas = $rutaManager->getAll();
        require_once 'views/Listado.php';
    }

    public function edit() {
        $rutaManager = new RutaManagerModel();
        $ruta = $rutaManager->getById($_GET['id']);
        require_once 'views/Editar.php';
    }

}

?>