<?php

namespace Model;
use Model\ActiveRecord;
use mysqli;

class University extends ActiveRecord{
    protected static mysqli $db;
    protected static $columnasDB = ["id", "nombre", "acronimo", "logo", "creado", "ultima_actualizacoin"];
    protected static $tabla = "universidades";

    public $id;
    public $nombre;
    public $acronimo;
    public $logo;
    public $creado;
    public $ultima_actualizacion;

    public function __construct( $args = [] ){
        $this->id = $args["id"] ?? NULL;
        $this->nombre = self::sanitizar( $args["nombre"] ?? "" );
        $this->acronimo = self::sanitizar( $args["acronimo"] ?? "" );
        $this->creado = date("Y/m/d");
        $this->ultima_actualizacion = date("Y/m/d");
    }

    public function validar(){
        self::$errores = [];

        if( !$this->nombre ){
            self::$errores[] = "El nombre de la escuela es obligatorio";
        }

        if( !$this->acronimo ){
            self::$errores[] = "El acronimo de la escuela es obligatorio";
        }
    }
}


?>