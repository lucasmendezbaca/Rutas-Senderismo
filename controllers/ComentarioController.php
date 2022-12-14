<?php
require_once 'models/RutaManagerModel.php';
require_once 'models/ComentarioManagerModel.php';

class ComentarioController {

    public function comment() {
        $id_ruta = $_GET['id'];
        $rutaManager = new RutaManagerModel();
        $comentarioManager = new ComentarioManagerModel();
        $ruta = $rutaManager->getById($id_ruta);
        $comentarios = $comentarioManager->getByRuta($id_ruta);
        require_once 'views/Comentar.php';
    }

    public function insert() {
        $id_ruta = $_POST['id_ruta'];
        $nombre = $_POST['nombre'];
        $texto = $_POST['texto'];
        $comentarioManager = new ComentarioManagerModel();
        $comentarioManager->insert($id_ruta, $nombre, $texto);
        header("Location: index.php?controller=comentario&action=comment&id=$id_ruta");
    }
}

?>