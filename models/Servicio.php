<?php

namespace Model;

class Servicio extends ActiveRecord {
    //Base de datos:
    protected static $tabla = 'servicios';
    protected static $columnasDB = ['id', 'nombre', 'precio'];

    public $id;
    public $nombre;
    public $precio;

    public function __construct($args=[]) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->precio = $args['precio'] ?? '';
    }

    public function validar() {
        if (!$this->nombre) {
            self::$alertas['error'][] = 'Debes introducir un nombre de servicio';
        }

        if (!$this->precio) {
            self::$alertas['error'][] = 'Debes introducir un precio al servicio';
        }

        if ($this->precio && !is_numeric($this->precio)) {
            self::$alertas['error'][] = 'Formato de precio no válido';
        }

        return self::$alertas;
    }
}