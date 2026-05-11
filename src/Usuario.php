<?php
namespace Luis\LaboratorioAutoload;

class Usuario {
    private $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function saludar() {
        return "¡Hola " . $this->nombre . ", tu clase se cargó correctamente con PSR-4!";
    }
}
