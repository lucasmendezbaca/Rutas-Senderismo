<?php
require_once 'ComentarioModel.php';
require_once 'Conexion.php';

class ComentarioManagerModel {

    private $conexion;
    private $comentarios;

    public function __construct() {
        $this->conexion = new Conexion();
        $this->comentarios = array();
    }

    public function getByRuta($id_ruta) {
        $consulta = "SELECT * FROM rutas_comentarios WHERE id_ruta = (:id_ruta)";
        $result = $this->conexion->consulta($consulta, array(":id_ruta" => $id_ruta));
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $comentario = new ComentarioModel($row['id'], $row['id_ruta'], $row['nombre'], $row['texto'], $row['fecha']);
            $this->comentarios[] = $comentario;
        }

        return $this->comentarios;
    }

    public function insert($id_ruta, $nombre, $texto) {
        $consulta = "INSERT INTO rutas_comentarios (id_ruta, nombre, texto, fecha) VALUES (:id_ruta, :nombre, :texto, :fecha)";
        $this->conexion->consulta($consulta, array(":id_ruta" => $id_ruta, ":nombre" => $nombre, ":texto" => $texto, ":fecha" => date("Y-m-d")));
    }
}

?>