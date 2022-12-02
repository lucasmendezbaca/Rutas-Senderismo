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

    public function update() {
        $rutaManager = new RutaManagerModel();
        $ruta = $rutaManager->getById($_POST['id']);
        $ruta->setTitulo($_POST['titulo']);
        $ruta->setDescripcion($_POST['descripcion']);
        $ruta->setDesnivel($_POST['desnivel']);
        $ruta->setDistancia($_POST['distancia']);
        $ruta->setNotas($_POST['notas']);
        $ruta->setDificultad($_POST['dificultad']);
        $rutaManager->update($ruta);
        header('Location: index.php');
    }

    public function delete() {
        $rutaManager = new RutaManagerModel();
        $rutaManager->delete($_GET['id']);
        header('Location: index.php');
    }

    public function new() {
        require_once 'views/NuevaRuta.php';
    }

    public function insert() {
        $rutaManager = new RutaManagerModel();
        $ruta = new RutaModel();
        $ruta->setTitulo($_POST['titulo']);
        $ruta->setDescripcion($_POST['descripcion']);
        $ruta->setDesnivel($_POST['desnivel']);
        $ruta->setDistancia($_POST['distancia']);
        $ruta->setNotas($_POST['notas']);
        $ruta->setDificultad($_POST['dificultad']);
        $rutaManager->insert($ruta);
        header('Location: index.php');
    }

    public function searchByTitle() {
        $rutaManager = new RutaManagerModel();
        $rutas = $rutaManager->searchByTittle($_POST['campo']);
        require_once 'views/Listado.php';
    }

    public function searchByDescription() {
        $rutaManager = new RutaManagerModel();
        $rutas = $rutaManager->searchByDescription($_POST['campo']);
        require_once 'views/Listado.php';
    }

    public function selectSearch() {
        if ($_POST['titulo'] == 'Título') {
            $this->searchByTitle();
        } else {
            $this->searchByDescription();
        }
    }

}

?>