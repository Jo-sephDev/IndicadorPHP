<?php
class Frecuencia 
{
    private $id;
    private $nombre;
    
    function __construct($id, $nombre = []) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function __set($nombre, $valor) {
        $this->propiedades[$nombre] = $valor;
    }

    public function __get($nombre) {
        if (array_key_exists($nombre, $this->propiedades)) {
            return $this->propiedades[$nombre];
        }
        trigger_error("Propiedad no definida: " . $nombre, E_USER_NOTICE);
        return null;
    }

    // Método para obtener todas las propiedades
    public function obtenerPropiedades() {
        return $this->propiedades;
    }
}
?>