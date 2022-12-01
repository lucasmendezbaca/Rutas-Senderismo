<?php
require_once 'config/config.php';

class Conexion {
    private $dns;
    private $usuario;
    private $contrasena;
    private $conexion;

    public function __construct() {
        $this->dns = "mysql:host=" . DB_HOST . ";dbname=" . DB;
        $this->usuario = DB_USER;
        $this->contrasena = DB_PASS;
        try {
            $this->conexion = new PDO($this->dns, $this->usuario, $this->contrasena, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function consulta($sql, $parametros = null) {
        $consulta = $this->conexion->prepare($sql);
        $consulta->execute($parametros);
        return $consulta;
    }
}



?>