<?php
class RutaModel {
    private $id;
    private $titulo;
    private $descripcion;
    private $desnivel;
    private $distancia;
    private $notas;
    private $dificultad;

    public function __construct($id, $titulo, $descripcion, $desnivel, $distancia, $notas, $dificultad) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->desnivel = $desnivel;
        $this->distancia = $distancia;
        $this->notas = $notas;
        $this->dificultad = $dificultad;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getDesnivel() {
        return $this->desnivel;
    }

    public function getDistancia() {
        return $this->distancia;
    }

    public function getNotas() {
        return $this->notas;
    }

    public function getDificultad() {
        return $this->dificultad;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setDesnivel($desnivel) {
        $this->desnivel = $desnivel;
    }

    public function setDistancia($distancia) {
        $this->distancia = $distancia;
    }

    public function setNotas($notas) {
        $this->notas = $notas;
    }

    public function setDificultad($dificultad) {
        $this->dificultad = $dificultad;
    }

}

?>