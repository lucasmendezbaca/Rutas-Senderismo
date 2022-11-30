<?php
require_once 'models/RutaManagerModel.php';

class RutaController {
    public function showAll() {
        $rutaManager = new RutaManagerModel();
        $rutas = $rutaManager->getAll();
        require_once 'views/Listado.php';
    }

}

?>