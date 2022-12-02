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
        $sql = "SELECT * FROM rutas WHERE id = (:id)";
        $result = $this->conexion->consulta($sql, array(":id" => $id));
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

    public function update($ruta) {
        $sql = "UPDATE rutas SET titulo = (:titulo), descripcion = (:descripcion), desnivel = (:desnivel), distancia = (:distancia), notas = (:notas), dificultad = (:dificultad) WHERE id = (:id)";
        $this->conexion->consulta($sql, array(":titulo" => $ruta->getTitulo(), ":descripcion" => $ruta->getDescripcion(), ":desnivel" => $ruta->getDesnivel(), ":distancia" => $ruta->getDistancia(), ":notas" => $ruta->getNotas(), ":dificultad" => $ruta->getDificultad(), ":id" => $ruta->getId()));
    }

    public function delete($id) {
        $sql = "DELETE FROM rutas WHERE id = (:id)";
        $this->conexion->consulta($sql, array(":id" => $id));
    }

    public function insert($ruta) {
        $sql = "INSERT INTO rutas (titulo, descripcion, desnivel, distancia, notas, dificultad) VALUES (:titulo, :descripcion, :desnivel, :distancia, :notas, :dificultad)";
        $this->conexion->consulta($sql, array(":titulo" => $ruta->getTitulo(), ":descripcion" => $ruta->getDescripcion(), ":desnivel" => $ruta->getDesnivel(), ":distancia" => $ruta->getDistancia(), ":notas" => $ruta->getNotas(), ":dificultad" => $ruta->getDificultad()));
    }

    public function searchByTittle($titulo) {
        $sql = "SELECT * FROM rutas WHERE titulo LIKE (:titulo)";
        $result = $this->conexion->consulta($sql, array(":titulo" => "%$titulo%"));
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

    public function searchByDescription($descripcion) {
        $sql = "SELECT * FROM rutas WHERE descripcion LIKE (:descripcion)";
        $result = $this->conexion->consulta($sql, array(":descripcion" => "%$descripcion%"));
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

}

?>