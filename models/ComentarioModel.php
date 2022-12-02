<?php
class ComentarioModel {
    private $id;
    private $id_ruta;
    private $nombre;
    private $texto;
    private $fecha;

    public function __construct($id, $id_ruta, $nombre, $texto, $fecha) {
        $this->id = $id;
        $this->id_ruta = $id_ruta;
        $this->nombre = $nombre;
        $this->texto = $texto;
        $this->fecha = $fecha;
    }

    public function getId() {
        return $this->id;
    }

    public function getId_ruta() {
        return $this->id_ruta;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setId_ruta($id_ruta) {
        $this->id_ruta = $id_ruta;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }


}

?>