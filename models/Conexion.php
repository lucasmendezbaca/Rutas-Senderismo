<?php
class Conexion {
    private $dns;
    private $usuario;
    private $contrasena;
    private $conexion;

    public function __construct() {
        $this->dns = "mysql:host=localhost;dbname=ejercicios";
        $this->usuario = "root";
        $this->contrasena = "";
        try {
            $this->conexion = new PDO($this->dns, $this->usuario, $this->contrasena, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function consulta($sql) {
        return $this->conexion->query($sql);
    }
}



?>