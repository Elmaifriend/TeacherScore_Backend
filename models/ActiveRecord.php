<?php

namespace Model;
use mysqli;

class ActiveRecord{
    protected static mysqli $db;
    protected static $columnasDB;
    protected static $tabla;
    protected static $errores = [];
    public $id;

    
    //Sanitizar dato
    public static function sanitizar( $dato ){
        
        if( $dato == NULL ){
            return NULL;
        }

        $dato = htmlspecialchars( $dato );
        $dato = self::$db->escape_string( $dato );

        return $dato;
    }


    //Establecer la conexion a la base de datos
    public static function setDB( $database ){
        self::$db = $database;
    }


    //Recorre todos los datos miembro del objeto y los devuelve 
    //En un arreglo ( Pasar de objeto a arreglo )
    public function obtenerCamposDelObjeto(){
        $campos = [];

        foreach( static::$columnasDB as $campo ){
            if( $campo == "id" ){
                continue;
            }

            $campos[$campo] = $this->$campo;
        }

        return $campos;
    }


    //Devuelve un arreglo con los datos contenidos en cada uno de los
    //campos de un objeto instanciado ( Pasa de objeto a arrego )
    public function sanitizarDatos(){
        $atributos = $this->obtenerCamposDelObjeto();

        $sanitizado = [];
        foreach( $atributos as $key => $value ){
            if( $value != NULL ){
                $sanitizado[ $key ] = self::$db->escape_string( $value ); 
            }
        }

        return $sanitizado;
    }


    //Si la instancia del objeto tiene un ID asociado, se actualizan
    //los datos, sino, se crea un nuevo registro
    public function guardar(){
        if( !is_null( $this->id ) ){
            $resultado = $this->actualizar();
        } else {
            $resultado = $this->crear();
        }

        return $resultado;
    }


    //Crear un nuevo registro en la base de datos
    public function crear(){
        //Sanitizar los datos
        $atributos = $this->sanitizarDatos();

        //Armar query
        $query = "INSERT INTO " . static::$tabla . " ( ";
        $query .= join( ", ", array_keys( $atributos ) );
        $query .= ") VALUES ('";
        $query .= join( "', '", array_values( $atributos ) );
        $query .= "')";

        $resultado = self::$db->query( $query );

        return $resultado;
    }


    //Actualizar registro ya existente en la base de datos
    public function actualizar(){
        //Sanitizar los datos
        $atributos = $this->sanitizarDatos();

        $valores = [];
        foreach( $atributos as $key => $value ){
            $valores[] = "{$key}='{$value}'";
        }

        $query = "UPDATE " . static::$tabla . " SET ";
        $query .= join( ", ", $valores );
        $query .= " WHERE id = '" . self::$db->escape_string( $this->id ) . "' ";
        $query .= "LIMIT 1";

        $resultado = self::$db->query( $query );

        return $resultado;
    }


    //Eliminar registro
    public function eliminar(){
        $query = "DELETE FROM " . static::$tabla . "WHERE id = "; 
        $query .= self::$db->escape_string( $this->id ) . " LIMIT 1";

        $resultado = self::$db->query( $query );

        return $resultado;
    }


    //Esta funcion es individual para cada clase que herede 
    //de ActiveRecord.
    //Cada modelo debe implementar sus propios mecanismos de 
    //validacion
    public function validar(){

        static::$errores = [];

        //Aqui van las reglas de validacion

        return static::$errores;
    }


    //Obtener lista de errores despues de validar 
    public static function getErrores(){
        return static::$errores;
    }


    //Convierte un registro SQL ( fetch_assoc ) en un objeto
    public static function crearObjeto( $registro ){
        $objeto = new static; //static = nombre de la clase que hereda

        foreach( $registro as $key => $value ){
            if( property_exists( $objeto, $key ) ){
                $objeto->$key = $value;
            }
        }

        return $objeto;
    }


    //Hacer una consulta SQL
    public static function consultaSQL( $query ){
        
        $resultado = self::$db->query( $query );

        //Itera por cada uno de los resultados, los convierte en objeto
        //y los almacena en un arreglo
        $array = [];
        while( $registro = $resultado->fetch_assoc() ){
            $array[] = static::crearObjeto( $registro );
        }

        //Liberar memoria
        $resultado->free();

        //Retorna el arreglo con los registros ya convertidos en objetos
        return $array;
    }


    //Obtener un arreglo con todos los registros ( Convertidos en objetos )
    public static function getAll(){
        $query = "SELECT * FROM " . static::$tabla;
        $resultado = self::consultaSQL( $query );

        return $resultado;
    }


    //Busca un registro en la base de datos por su id
    public static function findByID( $id ){
        $query = "SELECT * FROM " . static::$tabla . " WHERE id = '{$id}' LIMIT 1";
        $resultado = self::consultaSQL( $query );

        return array_shift( $resultado );
    }


    //Actualiza los campos del objeto instanciado, con la nueva informacion
    public function actualizarDatos( $args = [] ){
        foreach( $args as $key => $value ){
            if( property_exists( $this, $key ) && !is_null( $value ) ){
                $this->$key = $value;
            }
        }
    }

} //Fin de la clase ActiveRecord

?>