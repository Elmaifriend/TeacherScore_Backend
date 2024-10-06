<?php

use mysqli;

class DataBase{
    
    static string $host = "localhost";
    static string $user = "root";
    static string $password = "root";
    static string $dataBase = "teacher_score";


    public static function obtenerConexion() {
        $connection =  new mysqli( self::$host, self::$user, self::$password, self::$dataBase );

        if( $connection->connect_errno ){
            die( "No se pudo establecer conexion con la base de datos: " . $connection->connect_errno );
        }

        return $connection;
    }
}


?>