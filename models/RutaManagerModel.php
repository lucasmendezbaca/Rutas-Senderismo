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

    private function getRutas($result) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $ruta = new RutaModel($row['id'], $row['titulo'], $row['descripcion'], $row['desnivel'], $row['distancia'], $row['notas'], $this->getDificultyNumber($row['dificultad']));
            $this->rutas[] = $ruta;
        }
    }

    public function getAll() {
        $sql = "SELECT * FROM rutas";
        $result = $this->conexion->consulta($sql);
        $this->getRutas($result);
        return $this->rutas;
    }

    public function getById($id) {
        $sql = "SELECT * FROM rutas WHERE id = (:id)";
        $result = $this->conexion->consulta($sql, array(":id" => $id));
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $ruta = new RutaModel($row['id'], $row['titulo'], $row['descripcion'], $row['desnivel'], $row['distancia'], $row['notas'], $this->getDificultyNumber($row['dificultad']));
        return $ruta;
    }

    public function update($ruta) {
        $sql = "UPDATE rutas SET titulo = (:titulo), descripcion = (:descripcion), desnivel = (:desnivel), distancia = (:distancia), notas = (:notas), dificultad = (:dificultad) WHERE id = (:id)";
        $this->conexion->consulta($sql, array(":titulo" => $ruta->getTitulo(), ":descripcion" => $ruta->getDescripcion(), ":desnivel" => $ruta->getDesnivel(), ":distancia" => $ruta->getDistancia(), ":notas" => $ruta->getNotas(), ":dificultad" => $this->getDificultyString($ruta->getDificultad()), ":id" => $ruta->getId()));
    }

    public function delete($id) {
        $sql = "DELETE FROM rutas WHERE id = (:id)";
        $this->conexion->consulta($sql, array(":id" => $id));
    }

    public function insert($ruta) {
        $sql = "INSERT INTO rutas (titulo, descripcion, desnivel, distancia, notas, dificultad) VALUES (:titulo, :descripcion, :desnivel, :distancia, :notas, :dificultad)";
        $this->conexion->consulta($sql, array(":titulo" => $ruta->getTitulo(), ":descripcion" => $ruta->getDescripcion(), ":desnivel" => $ruta->getDesnivel(), ":distancia" => $ruta->getDistancia(), ":notas" => $ruta->getNotas(), ":dificultad" => $this->getDificultyString($ruta->getDificultad())));
    }

    public function searchByTittle($titulo) {
        $sql = "SELECT * FROM rutas WHERE LOWER(titulo) LIKE LOWER(:titulo)";
        $result = $this->conexion->consulta($sql, array(":titulo" => "%$titulo%"));
        $this->getRutas($result);
        return $this->rutas;
    }

    public function searchByDescription($descripcion) {
        $sql = "SELECT * FROM rutas WHERE descripcion LIKE (:descripcion)";
        $result = $this->conexion->consulta($sql, array(":descripcion" => "%$descripcion%"));
        $this->getRutas($result);
        return $this->rutas;
    }

    public function getDificultyString($dificultad) {
        switch ($dificultad) {
            case "Fácil":
                return 0;
            case "Media":
                return 1;
            case "Difícil":
                return 2;
            default:
                return 0;
        }
    }

    public function getDificultyNumber($dificultad) {
        switch ($dificultad) {
            case 0:
                return "Fácil";
            case 1:
                return "Media";
            case 2:
                return "Difícil";
            default:
                return "Fácil";
        }
    }

}

?>