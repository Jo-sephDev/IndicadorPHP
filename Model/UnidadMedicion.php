<?php

class UnidadMedicion
{
    private $id;
    private $descripcion;
    
    function __construct($id, $descripcion = []) {
        $this->id = $id;
        $this->descripcion = $descripcion;
    }

    public function __set($descripcion, $valor) {
        $this->propiedades[$descripcion] = $valor;
    }

    public function __get($descripcion) {
        if (array_key_exists($descripcion, $this->propiedades)) {
            return $this->propiedades[$descripcion];
        }
        trigger_error("Propiedad no definida: " . $descripcion, E_USER_NOTICE);
        return null;
    }

    // Método para obtener todas las propiedades
    public function obtenerPropiedades() {
        return $this->propiedades;
    }
}
?> 
