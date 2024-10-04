<?php
namespace Model;
use mysqli;

class ActiveRecord{
    protected static mysqli $db;
    protected static $columnas;
    protected static $tabla;

    //Errores
    protected static $errores = [];

    public function guardar(){
        if( !is_null( $this->id ) ){
            //Actualizar el registro
            $this->actualizar();
        } else {
            
        }
    }
}

?>
