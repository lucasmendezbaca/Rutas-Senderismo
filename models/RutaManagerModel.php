<?php
require_once 'models/RutaModel.php';
require_once 'models/Conexion.php';

class RutaManagerModel {
    private $conexion;
    private $rutas;

    public function __construct() {
        $this->conexion = new Conexion();
        $this->rutas = array();
    }

    public function getAll() {
        $sql = "SELECT * FROM rutas";
        $result = $this->conexion->consulta($sql);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $ruta = new RutaModel();
            $ruta->setId($row['id']);
            $ruta->setTitulo($row['titulo']);
            $ruta->setDescripcion($row['descripcion']);
            $ruta->setDesnivel($row['desnivel']);
            $ruta->setDistancia($row['distancia']);
            $ruta->setNotas($row['notas']);
            $ruta->setDificultad($row['dificultad']);

            $this->rutas[] = $ruta;
        }
        return $this->rutas;
    }

    public function getById($id) {
        $sql = "SELECT * FROM rutas WHERE id = $id";
        $result = $this->conexion->consulta($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $ruta = new RutaModel();
        $ruta->setId($row['id']);
        $ruta->setTitulo($row['titulo']);
        $ruta->setDescripcion($row['descripcion']);
        $ruta->setDesnivel($row['desnivel']);
        $ruta->setDistancia($row['distancia']);
        $ruta->setNotas($row['notas']);
        $ruta->setDificultad($row['dificultad']);
        return $ruta;
    }

}

?>